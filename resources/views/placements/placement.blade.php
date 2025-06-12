<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematical Quiz</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .quiz-container {
            background: white;
            border-radius: 20px;
            padding: 0;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: #2d1b69;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 20px 20px 0 0;
        }

        .header h1 {
            font-size: 18px;
            font-weight: 600;
        }

        .timer {
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 12px;
            border-radius: 20px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .timer::before {
            content: "⏱";
        }

        .progress-bar {
            padding: 20px;
            background: white;
        }

        .progress-container {
            display: flex;
            gap: 8px;
            align-items: center;
            margin-bottom: 30px;
        }

        .progress-item {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 600;
            border: 2px solid #e0e0e0;
            background: white;
            color: #888;
        }

        .progress-item.completed {
            background: #4CAF50;
            border-color: #4CAF50;
            color: white;
        }

        .progress-item.answered {
            background: #4CAF50;
            border-color: #4CAF50;
            color: white;
        }

        .progress-item.error {
            background: #ff6b6b;
            border-color: #ff6b6b;
            color: white;
        }

        .progress-item.current {
            background: #2d1b69;
            border-color: #2d1b69;
            color: white;
        }

        .progress-item.clickable {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .progress-item.clickable:hover {
            transform: scale(1.1);
        }

        .question {
            padding: 0 20px 30px;
            background: white;
        }

        .question h2 {
            font-size: 18px;
            color: #333;
            line-height: 1.4;
            margin-bottom: 40px;
        }

        .answers {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 30px;
        }

        .answer-option {
            padding: 18px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: white;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .answer-option:hover {
            border-color: #667eea;
            background: #f8f9ff;
        }

        .answer-option.selected {
            background: #667eea;
            border-color: #667eea;
            color: white;
        }

        .answer-label {
            font-weight: 600;
            color: #888;
            min-width: 20px;
        }

        .answer-option.selected .answer-label {
            color: white;
        }

        .actions {
            padding: 20px;
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .submit-btn {
            background: #ffc107;
            color: #333;
            border: none;
            padding: 15px 40px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            background: #ffb300;
            transform: translateY(-2px);
        }

        .submit-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        @media (max-width: 480px) {
            .quiz-container {
                margin: 10px;
                max-width: none;
            }

            .progress-item {
                width: 30px;
                height: 30px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="quiz-container">
        <div class="header">
            <h1>Mathematic</h1>
            <div class="timer">0:00</div>
        </div>

        <div class="progress-bar">
            <div class="progress-container">
                <div class="progress-item clickable current" data-question="1">1</div>
                <div class="progress-item clickable" data-question="2">2</div>
                <div class="progress-item clickable" data-question="3">3</div>
            </div>
        </div>

        <div class="question">
            <h2 id="question-text">What is 2 + 2?</h2>

            <div class="answers" id="answers-container">
                <div class="answer-option" data-answer="a">
                    <span class="answer-label">a.</span>
                    <span>3</span>
                </div>
                <div class="answer-option" data-answer="b">
                    <span class="answer-label">b.</span>
                    <span>4</span>
                </div>
                <div class="answer-option" data-answer="c">
                    <span class="answer-label">c.</span>
                    <span>5</span>
                </div>
                <div class="answer-option" data-answer="d">
                    <span class="answer-label">d.</span>
                    <span>6</span>
                </div>
            </div>
        </div>

        <div class="actions">
            <button class="submit-btn">Submit</button>
        </div>
    </div>

    <script>
        // Quiz data
        const questions = [
            {
                id: 1,
                question: "What is 2 + 2?",
                answers: [
                    { label: "a", text: "3" },
                    { label: "b", text: "4" },
                    { label: "c", text: "5" },
                    { label: "d", text: "6" }
                ]
            },
            {
                id: 2,
                question: "Simplify: (3x-4)(x+2)?",
                answers: [
                    { label: "a", text: "3x²+6x-8" },
                    { label: "b", text: "3x²+2x-8" },
                    { label: "c", text: "3x²-2x+8" },
                    { label: "d", text: "3x²+2x+8" }
                ]
            },
            {
                id: 3,
                question: "What is the value of x in: 2x + 5 = 15?",
                answers: [
                    { label: "a", text: "x = 5" },
                    { label: "b", text: "x = 10" },
                    { label: "c", text: "x = 7.5" },
                    { label: "d", text: "x = 20" }
                ]
            }
        ];

        let currentQuestion = 1;
        let userAnswers = {}; // Store user answers

        // Get DOM elements
        const questionText = document.getElementById('question-text');
        const answersContainer = document.getElementById('answers-container');
        const progressItems = document.querySelectorAll('.progress-item');
        const submitBtn = document.querySelector('.submit-btn');

        // Initialize quiz
        function loadQuestion(questionId) {
            const question = questions.find(q => q.id === questionId);
            if (!question) return;

            // Update question text
            questionText.textContent = question.question;

            // Update answers
            answersContainer.innerHTML = '';
            question.answers.forEach(answer => {
                const answerDiv = document.createElement('div');
                answerDiv.className = 'answer-option';
                answerDiv.dataset.answer = answer.label;

                // Check if this answer was previously selected
                if (userAnswers[questionId] === answer.label) {
                    answerDiv.classList.add('selected');
                }

                answerDiv.innerHTML = `
                    <span class="answer-label">${answer.label}.</span>
                    <span>${answer.text}</span>
                `;

                answerDiv.addEventListener('click', function() {
                    selectAnswer(this, questionId, answer.label);
                });

                answersContainer.appendChild(answerDiv);
            });

            // Update progress indicators
            updateProgressIndicators();
            // Update submit button state
            updateSubmitButton();
        }

        // Select answer function
        function selectAnswer(element, questionId, answerLabel) {
            // Remove selected class from all options
            const allOptions = answersContainer.querySelectorAll('.answer-option');
            allOptions.forEach(opt => opt.classList.remove('selected'));

            // Add selected class to clicked option
            element.classList.add('selected');

            // Store the answer
            userAnswers[questionId] = answerLabel;

            // Update progress indicators
            updateProgressIndicators();
            // Update submit button state
            updateSubmitButton();
        }

        // Update submit button state
        function updateSubmitButton() {
            const allAnswered = questions.every(q => userAnswers[q.id]);

            if (allAnswered) {
                submitBtn.textContent = 'Finish Quiz';
                submitBtn.style.background = '#4CAF50';
            } else {
                submitBtn.textContent = 'Submit';
                submitBtn.style.background = '#ffc107';
            }
        }

        // Update progress indicators
        function updateProgressIndicators() {
            progressItems.forEach(item => {
                const questionId = parseInt(item.dataset.question);

                // Remove all status classes
                item.classList.remove('current', 'answered', 'completed');

                // Add appropriate class
                if (questionId === currentQuestion) {
                    item.classList.add('current');
                } else if (userAnswers[questionId]) {
                    item.classList.add('answered');
                }
            });
        }

        // Handle progress item clicks
        progressItems.forEach(item => {
            item.addEventListener('click', function() {
                const questionId = parseInt(this.dataset.question);
                currentQuestion = questionId;
                loadQuestion(questionId);
            });
        });

        // Handle submit
        submitBtn.addEventListener('click', function() {
            const allAnswered = questions.every(q => userAnswers[q.id]);

            if (allAnswered) {
                // All questions answered, redirect to results
                window.location.href = '/placement/result';
            } else {
                // Not all questions answered
                const unansweredQuestions = questions.filter(q => !userAnswers[q.id]).map(q => q.id);
                alert(`Please answer all questions. Missing: Question ${unansweredQuestions.join(', ')}`);
            }
        });

        // Initialize the first question
        loadQuestion(1);
    </script>
</body>
</html>
