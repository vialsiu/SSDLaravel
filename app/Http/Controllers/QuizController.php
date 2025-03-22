<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class QuizController extends Controller
{
    public function getQuiz()
    {
        $post = Post::inRandomOrder()->first();
    
        if (!$post) {
            return response()->json(['error' => 'No posts available for quiz.'], 404);
        }
    
        // Define possible question types
        $questionTypes = [
            'artist' => "Who created '{$post->title}'?",
            'medium' => "What is the medium of '{$post->title}'?",
            'origin' => "Where does '{$post->title}' originate from?",
            'year' => "In what year was '{$post->title}' created?"
        ];
    
        // Select random type
        $randomKey = array_rand($questionTypes);
        $correctAnswer = $post->$randomKey;
    
        // Get unique wrong answers from other posts, excluding the correct answer
        $wrongAnswers = Post::where($randomKey, '!=', $correctAnswer)
            ->pluck($randomKey)
            ->unique()
            ->filter(function ($value) use ($correctAnswer) {
                return strtolower(trim($value)) !== strtolower(trim($correctAnswer));
            })
            ->shuffle()
            ->take(3)
            ->values()
            ->toArray();
    
        // Merge correct answer and shuffle all
        $choices = array_merge($wrongAnswers, [$correctAnswer]);
        $choices = collect($choices)->unique()->shuffle()->values()->toArray();
    
        return response()->json([
            'id' => $post->id,
            'question' => $questionTypes[$randomKey],
            'questionType' => $randomKey,
            'choices' => $choices,
            'correct_answer' => $correctAnswer,
            'image_path' => asset('images/' . $post->image_path)
        ]);
    }
    
    public function checkAnswer(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:posts,id',
            'answer' => 'required|string',
            'questionType' => 'required|string|in:artist,medium,origin,year'
        ]);

        $post = Post::findOrFail($request->id);
        $correct = strtolower($request->answer) === strtolower($post->{$request->questionType});

        return response()->json([
            'correct' => $correct,
            'correct_answer' => $post->{$request->questionType}
        ]);
    }
}
