<?php $__env->startSection('content'); ?>
<div class="w-4/5 mx-auto mt-20 pt-10 pb-10 rounded-lg shadow-md bg-cover bg-center"
     style="background-image: url('<?php echo e(asset('images/piece6.jpg')); ?>');">

     <div class="max-w-2xl mx-auto text-center mt-10 rounded shadow" style="background-color: #ded6d1; color: #4A403A; padding: 2.5rem 1.5rem;">
        <h1 class="text-3xl font-bold mb-4" style="color: #3E3A36;">Art Trivia Quiz</h1>
    
        <div id="quiz-container" class="mt-5 p-5 bg-gray-100 shadow-lg rounded-md">
            <p id="question" class="text-xl font-medium"></p>
            <div id="choices" class="mt-3"></div>
            <button id="submit"
            class="mt-4 px-4 py-2 font-bold rounded hidden transition duration-200"
            style="background-color: #d1c7c0; color: #4A403A;"
            onmouseover="this.style.backgroundColor='#c3bab3';"
            onmouseout="this.style.backgroundColor='#d1c7c0';">
            Submit
        </button>
                    <p id="feedback" class="mt-4 font-semibold"></p>
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

                let choicesContainer = document.getElementById('choices');
                choicesContainer.innerHTML = '';
                data.choices.forEach(choice => {
                    let button = document.createElement('button');
                    button.innerText = choice;
                    button.classList.add("px-3", "py-2", "border", "border-gray-500", "rounded", "mr-2", "mt-2", "hover:bg-gray-200");
                    button.onclick = () => selectAnswer(button, choice);
                    choicesContainer.appendChild(button);
                });

                document.getElementById('submit').classList.add('hidden');
                document.getElementById('feedback').innerText = '';
                document.getElementById('feedback').classList.remove('bg-[#ded6d1]', 'text-white');
            });
    }

    function selectAnswer(button, answer) {
    let buttons = document.querySelectorAll("#choices button");
    buttons.forEach(btn => {
        btn.style.backgroundColor = "";
        btn.style.color = "";
    });
    button.style.backgroundColor = "#ded6d1";
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
            let feedback = document.getElementById('feedback');
            // feedback.style.backgroundColor = "#ded6d1";
            feedback.style.color = "#4A403A";
            feedback.style.padding = "0.5rem";
            feedback.style.borderRadius = "0.375rem";

            if (data.correct) {
                feedback.innerText = "Correct!";
            } else {
                feedback.innerText = "Wrong! The correct answer is: " + data.correct_answer;
            }

            setTimeout(fetchQuestion, 3000);
        });
    }

    document.addEventListener("DOMContentLoaded", fetchQuestion);
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/quiz.blade.php ENDPATH**/ ?>