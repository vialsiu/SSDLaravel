@extends('layouts.app')

@section('content')
<div class="relative w-full mx-auto pt-6 pb-20 rounded-lg shadow-md bg-cover bg-center min-h-screen"
     style="background-image: url('{{ asset('images/piece6.jpg') }}'); overflow: hidden;">

    <!-- Absolutely positioned inner container -->
    <div class="absolute inset-0 overflow-y-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center mt-24 rounded shadow" 
             style="background-color: #efe9e9; color: #4A403A; padding: 2.5rem 1.5rem;">
            
            <h1 class="text-3xl font-bold mb-4" style="color: #3E3A36;">Art Trivia Quiz</h1>
            
            <img id="painting-image" src="" alt="Artwork" 
                 class="w-full max-h-64 object-contain rounded mb-4">

            <div id="quiz-container" class="mt-5 p-5 shadow-inner rounded-md" 
                 style="background-color: #d7d1d1;">
                 
                <p id="question" class="text-xl font-medium mb-4"></p>
                <div id="choices" class="mt-3"></div>

                <button id="submit" class="mt-4 px-4 py-2 font-bold rounded hidden"
                        style="background-color: #5a504b; color: #e9e7e7; border: 1px solid #afa5a3;">
                    Submit
                </button>

                <p id="feedback" class="mt-4 font-semibold"></p>
            </div>
        </div>
    </div>
</div>

<script>
    let currentQuestion = null;
    let questionType = null;

    function fetchQuestion() {
        fetch('/api/quiz')
            .then(response => response.json())
            .then(data => {
                currentQuestion = data;
                questionType = data.questionType;
                document.getElementById('question').innerText = data.question;
                document.getElementById('painting-image').src = data.image_path;

                const choicesContainer = document.getElementById('choices');
                choicesContainer.innerHTML = '';

                data.choices.forEach(choice => {
                    const button = document.createElement('button');
                    button.innerText = choice;
                    button.classList.add("px-3", "py-2", "border", "border-gray-500", "rounded", "mr-2", "mt-2");
                    button.style.backgroundColor = "#d7d1d1";
                    button.style.color = "#4A403A";

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

                    button.onclick = () => selectAnswer(button, choice);
                    choicesContainer.appendChild(button);
                });

                document.getElementById('submit').classList.add('hidden');
                const feedback = document.getElementById('feedback');
                feedback.innerText = '';
                feedback.className = '';
            });
    }

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

        document.getElementById('submit').classList.remove('hidden');
        document.getElementById('submit').onclick = () => checkAnswer(answer);
    }

    function checkAnswer(answer) {
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
            const feedback = document.getElementById('feedback');
            // feedback.style.backgroundColor = "#ded6d1";
            feedback.style.color = "#4A403A";
            feedback.style.padding = "0.5rem";
            feedback.style.borderRadius = "0.375rem";

            if (data.correct) {
            feedback.innerText = "Correct!";
            setTimeout(fetchQuestion, 500); 
        } else {
            feedback.innerText = "Wrong! The correct answer is: " + data.correct_answer;
            setTimeout(fetchQuestion, 2000); 
        }
    });
    }

    document.addEventListener("DOMContentLoaded", fetchQuestion);
</script>
@endsection
