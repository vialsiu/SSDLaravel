<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class QuizController extends Controller
{
    // Fetch a random quiz question from the Posts database
    public function getQuiz()
    {
        $post = Post::inRandomOrder()->first();

        if (!$post) {
            return response()->json(['error' => 'No posts available for quiz.'], 404);
        }

        // Randomly select a type of question
        $questionTypes = [
            'artist' => "Who created '{$post->title}'?",
            'medium' => "What is the medium of '{$post->title}'?",
            'origin' => "Where does '{$post->title}' originate from?",
            'year' => "In what year was '{$post->title}' created?"
        ];

        $randomKey = array_rand($questionTypes);
        $correctAnswer = $post->$randomKey;

        // Get 3 more random wrong answers from other posts
        $wrongAnswers = Post::where($randomKey, '!=', $correctAnswer)
            ->inRandomOrder()
            ->limit(3)
            ->pluck($randomKey)
            ->toArray();

        // Ensure there are 4 total choices
        $choices = array_merge($wrongAnswers, [$correctAnswer]);
        shuffle($choices); // Randomize order

        return response()->json([
            'id' => $post->id,
            'question' => $questionTypes[$randomKey],
            'choices' => $choices,
            'correct_answer' => $correctAnswer
        ]);
    }

    // Validate answer
    public function checkAnswer(Request $request)
    {
        $post = Post::findOrFail($request->id);
        $isCorrect = $request->answer === $post->$request->questionType;

        return response()->json([
            'correct' => $isCorrect,
            'correct_answer' => $post->$request->questionType
        ]);
    }
}
