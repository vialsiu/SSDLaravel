<?php $__env->startSection('content'); ?>
<div class="relative w-full mx-auto pt-6 pb-20 rounded-lg shadow-md bg-cover bg-center min-h-screen"
     style="background-image: url('<?php echo e(asset('images/piece6.jpg')); ?>'); overflow: hidden;">

    <div class="absolute inset-0 overflow-y-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mt-24 rounded shadow" 
             style="background-color: #efe9e9; color: #4A403A; padding: 1.5rem;">
            
            <h1 class="text-3xl font-bold mb-4" style="color: #3E3A36;">Art Trivia Quiz</h1>
            
            <img id="painting-image" src="" alt="Artwork" 
            class="w-full max-h-64 object-contain rounded mb-4">
       

            <div id="quiz-container" class="mt-5 px-5 py-3 shadow-inner rounded-md max-w-2xl mx-auto" 
                 style="background-color: #e2dddd;">
                 
                 <p id="question-number" class="text-lg font-semibold mb-2"></p>
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
    let usedQuestionIds = [];
    let totalQuestions = 10;
    let score = 0;
    let questionCount = 0;
    let originalQuizHTML = "";

    document.addEventListener("DOMContentLoaded", () => {
        originalQuizHTML = document.getElementById('quiz-container').innerHTML;
        fetchQuestion();
    });

    function fetchQuestion() {
        if (questionCount >= totalQuestions) {
            showFinalScore();
            return;
        }

        fetch('/api/quiz')
            .then(response => response.json())
            .then(data => {
                if (usedQuestionIds.includes(data.id)) {
                    fetchQuestion(); 
                    return;
                }

                usedQuestionIds.push(data.id);
                currentQuestion = data;
                questionType = data.questionType;
                document.getElementById('question-number').innerText = `Question ${questionCount + 1} of ${totalQuestions}`;
                document.getElementById('question').innerText = data.question;
                const paintingImg = document.getElementById('painting-image');
                paintingImg.src = data.image_path;

                const choicesContainer = document.getElementById('choices');
                choicesContainer.innerHTML = '';

                data.choices.forEach(choice => {
                    const button = document.createElement('button');
                    button.innerText = choice;
                    button.classList.add("px-3", "py-2", "border", "border-gray-500", "rounded", "mr-2", "mt-2");
                    button.style.backgroundColor = "#d7d1d1";
                    button.style.color = "#4A403A";
                    button.style.cursor = "pointer";

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

        setTimeout(() => {
            fetchQuestion();
        }, data.correct ? 300 : 500); 
    });

}

    function showFinalScore() {
        const container = document.getElementById('quiz-container');
        container.innerHTML = `
            <p class="text-2xl font-semibold mb-4">You scored ${score} out of ${totalQuestions}!</p>
            <button id="restart" class="px-4 py-2 mt-4 font-bold rounded"
                style="background-color: #5a504b; color: #e9e7e7;">
                Play Again
            </button>
        `;

        document.getElementById('restart').onclick = () => {
            score = 0;
            questionCount = 0;
            usedQuestionIds = [];

            container.innerHTML = originalQuizHTML;

            fetchQuestion();
        };
    }
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/quiz.blade.php ENDPATH**/ ?>