<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class QuizController extends Controller
{
    public function getQuiz()
    {
        $post = Post::inRandomOrder()->first();

        $questionTypes = [
            'artist' => "Who created '{$post->title}'?",
            'medium' => "What is the medium of '{$post->title}'?",
            'origin' => "Where does '{$post->title}' originate from?",
            'year' => "In what year was '{$post->title}' created?"
        ];

        $randomKey = array_rand($questionTypes);
        $correctAnswer = $post->$randomKey;

        $wrongAnswers = Post::where($randomKey, '!=', $correctAnswer)
            ->inRandomOrder()
            ->limit(3)
            ->pluck($randomKey)
            ->toArray();

        $choices = array_merge($wrongAnswers, [$correctAnswer]);
        shuffle($choices);

        return response()->json([
            'id' => $post->id,
            'question' => $questionTypes[$randomKey],
            'choices' => $choices,
            'questionType' => $randomKey,
            'correct_answer' => $correctAnswer,
            'image_path' => asset('images/' . $post->image_path),
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
