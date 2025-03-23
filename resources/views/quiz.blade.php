@extends('layouts.app')

@section('content')

<!-- Art Trivia Quiz Main Container with Background Image -->
<div class="relative w-full mx-auto pt-6 pb-20 rounded-lg shadow-md bg-cover bg-center min-h-screen"
     style="background-image: url('{{ asset('images/piece6.jpg') }}'); overflow: hidden;">

    <!-- Scrollable Quiz Container -->
    <div class="absolute inset-0 overflow-y-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Quiz Card -->
        <div class="max-w-3xl mx-auto text-center mt-24 rounded shadow" 
             style="background-color: #efe9e9; color: #4A403A; padding: 1.5rem;">
            
            <!-- Quiz Title -->
            <h1 class="text-3xl font-bold mb-4" style="color: #3E3A36;">Art Trivia Quiz</h1>
            
            <!-- Painting Image Loaded Dynamically -->
            <img id="painting-image" src="" alt="Artwork" 
                class="w-full max-h-64 object-contain rounded mb-4">

            <!-- Quiz Questions & Choices -->
            <div id="quiz-container" class="mt-5 px-5 py-3 shadow-inner rounded-md max-w-2xl mx-auto" 
                 style="background-color: #e2dddd;">
                 
                 <!-- Current Question Number (e.g., Question 1 of 10) -->
                 <p id="question-number" class="text-lg font-semibold mb-2"></p>

                 <!-- Current Question Text -->
                 <p id="question" class="text-xl font-medium mb-4"></p>

                 <!-- Choices Container (Buttons populated dynamically) -->
                 <div id="choices" class="mt-3"></div>

                <!-- Submit Button (Initially Hidden) -->
                <button id="submit" class="mt-4 px-4 py-2 font-bold rounded hidden"
                        style="background-color: #5a504b; color: #e9e7e7; border: 1px solid #afa5a3;">
                    Submit
                </button>

                <!-- Feedback after answering a question -->
                <p id="feedback" class="mt-4 font-semibold"></p>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript: Quiz Logic Explained for you -->
<script>
    // Initialize quiz variables
    let currentQuestion = null;     // Holds the current question data
    let questionType = null;        // Tracks the type of question (artist, painting, etc.)
    let usedQuestionIds = [];       // Prevents repeating questions
    let totalQuestions = 10;        // Total number of questions per quiz
    let score = 0;                  // User's current score
    let questionCount = 0;          // Tracks current question number
    let originalQuizHTML = "";      // Stores initial HTML for restarting quiz

    // On page load, fetch the first question
    document.addEventListener("DOMContentLoaded", () => {
        originalQuizHTML = document.getElementById('quiz-container').innerHTML;
        fetchQuestion();
    });

    // Fetches a new question from the server
    function fetchQuestion() {
        // Show final score if the quiz is complete
        if (questionCount >= totalQuestions) {
            showFinalScore();
            return;
        }

        fetch('/api/quiz')
            .then(response => response.json())
            .then(data => {
                // If question is already used, fetch another
                if (usedQuestionIds.includes(data.id)) {
                    fetchQuestion(); 
                    return;
                }

                // Update quiz state with new question
                usedQuestionIds.push(data.id);
                currentQuestion = data;
                questionType = data.questionType;

                // Update question number and text
                document.getElementById('question-number').innerText = `Question ${questionCount + 1} of ${totalQuestions}`;
                document.getElementById('question').innerText = data.question;

                // Set painting image
                const paintingImg = document.getElementById('painting-image');
                paintingImg.src = data.image_path;

                // Populate choices dynamically
                const choicesContainer = document.getElementById('choices');
                choicesContainer.innerHTML = '';

                data.choices.forEach(choice => {
                    const button = document.createElement('button');
                    button.innerText = choice;
                    button.classList.add("px-3", "py-2", "border", "border-gray-500", "rounded", "mr-2", "mt-2");
                    button.style.backgroundColor = "#d7d1d1";
                    button.style.color = "#4A403A";
                    button.style.cursor = "pointer";

                    // Hover effect
                    button.addEventListener("mouseenter", () => {
                        if (!button.classList.contains('selected')) {
                            button.style.backgroundColor = "#c4bebe";
                        }
                    });
                    button.addEventListener("mouseleave", () => {
                        if (!button.classList.contains('selected')) {
                            button.style.backgroundColor = "#d7d1d1";
                        }
                    });

                    // Select answer on click
                    button.onclick = () => selectAnswer(button, choice);
                    choicesContainer.appendChild(button);
                });

                // Reset feedback and submit button visibility
                document.getElementById('submit').classList.add('hidden');
                const feedback = document.getElementById('feedback');
                feedback.innerText = '';
                feedback.className = '';
            });
    }

    // Handles selecting an answer (visual selection)
    function selectAnswer(button, answer) {
        const buttons = document.querySelectorAll("#choices button");
        buttons.forEach(btn => {
            btn.classList.remove('selected');
            btn.style.backgroundColor = "#d7d1d1";
            btn.style.color = "#4A403A";
        });

        button.classList.add('selected');
        button.style.backgroundColor = "#c4bebe";
        button.style.color = "#4A403A";

        // Enable submit button after selection
        document.getElementById('submit').classList.remove('hidden');
        document.getElementById('submit').onclick = () => checkAnswer(answer);
    }

    // Sends selected answer to the server and checks correctness
    function checkAnswer(answer) {
        const feedback = document.getElementById('feedback');

        fetch('/api/quiz/answer', {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            body: JSON.stringify({
                id: currentQuestion.id,
                answer: answer,
                questionType: questionType
            })
        })
        .then(response => response.json())
        .then(data => {
            // Provide feedback on correctness
            feedback.style.color = "#4A403A";
            feedback.style.padding = "0.5rem";
            feedback.style.borderRadius = "0.375rem";

            questionCount++;

            if (data.correct) {
                score++;
                feedback.innerText = "Correct!";
            } else {
                feedback.innerText = "Wrong! The correct answer is: " + data.correct_answer;
            }

            // Short delay before loading next question
            setTimeout(() => {
                fetchQuestion();
            }, data.correct ? 300 : 500); 
        });
    }

    // Displays final score and allows restarting the quiz
    function showFinalScore() {
        const container = document.getElementById('quiz-container');
        container.innerHTML = `
            <p class="text-2xl font-semibold mb-4">You scored ${score} out of ${totalQuestions}!</p>
            <button id="restart" class="px-4 py-2 mt-4 font-bold rounded"
                style="background-color: #5a504b; color: #e9e7e7;">
                Play Again
            </button>
        `;

        // Restart quiz button functionality
        document.getElementById('restart').onclick = () => {
            score = 0;
            questionCount = 0;
            usedQuestionIds = [];

            container.innerHTML = originalQuizHTML;

            fetchQuestion();
        };
    }
</script>

@endsection
