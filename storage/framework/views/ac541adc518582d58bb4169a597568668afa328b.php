<?php $__env->startSection('content'); ?>
<div class="max-w-2xl mx-auto text-center mt-10">
    <h1 class="text-3xl font-bold">Art Trivia Quiz</h1>
    <div id="quiz-container" class="mt-5 p-5 bg-gray-100 shadow-lg rounded-md">
        <p id="question" class="text-xl font-medium"></p>
        <div id="choices" class="mt-3"></div>
        <button id="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white font-bold rounded hidden">Submit</button>
        <p id="feedback" class="mt-4 font-semibold"></p>
    </div>
</div>

<script>
    let currentQuestion = null;
    let questionType = null;

    // Fetch a random question
    function fetchQuestion() {
        fetch('/api/quiz')
            .then(response => response.json())
            .then(data => {
                currentQuestion = data;
                questionType = data.questionType;
                document.getElementById('question').innerText = data.question;

                let choicesContainer = document.getElementById('choices');
                choicesContainer.innerHTML = ''; // Clear previous choices
                data.choices.forEach(choice => {
                    let button = document.createElement('button');
                    button.innerText = choice;
                    button.classList.add("px-3", "py-2", "border", "border-gray-500", "rounded", "mr-2", "mt-2", "hover:bg-gray-200");
                    button.onclick = () => selectAnswer(button, choice);
                    choicesContainer.appendChild(button);
                });

                document.getElementById('submit').classList.add('hidden');
                document.getElementById('feedback').innerText = '';
            });
    }

    function selectAnswer(button, answer) {
        let buttons = document.querySelectorAll("#choices button");
        buttons.forEach(btn => btn.classList.remove('bg-green-500', 'text-white'));

        button.classList.add('bg-green-500', 'text-white');

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
            if (data.correct) {
                feedback.innerText = "Correct!";
                feedback.classList.add('text-green-500');
            } else {
                feedback.innerText = "Wrong! The correct answer is: " + data.correct_answer;
                feedback.classList.add('text-red-500');
            }
            setTimeout(fetchQuestion, 3000);
        });
    }

    document.addEventListener("DOMContentLoaded", fetchQuestion);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/quiz.blade.php ENDPATH**/ ?>