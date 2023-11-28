<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Quiz Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Jquery Quiz System</h1>
        <div class="main-div">
            <div class="inner-div">
                <h2 class="question">Question Comes Here</h2>
                <ul>
                     <li>
                        <input type="radio" name="answer" id="ans1" class='answer' />
                        <label for="ans1" id='option1'>Answer Options</label>
                     </li>
                     
                     <li>
                        <input type="radio" name="answer" id="ans2" class='answer' />
                        <label for="ans2" id='option2'>Answer Options</label>
                     </li>
                     <li>
                        <input type="radio" name="answer" id="ans3" class='answer' />
                        <label for="ans3" id='option3'>Answer Options</label>
                     </li>
                     <li>
                        <input type="radio" name="answer" id="ans4" class='answer' />
                        <label for="ans4" id='option4'>Answer Options</label>
                     </li>

                </ul>
                <button id='submit'>Submit</button>
                <div id="show-score" class='scorearea'></div>
            </div>
        </div>

        <script src="jquery/jquery-3.6.1.js"></script>
        <script>

    const quizDB = [
        {
            question:'Q1:What is Full Form Of HTML?',
            a:"Hello To My Land",
            b:"Here Text Markup Language",
            c:"Hyper Text Markup Languages",
            d:"Hyper Text Markup Language",
            ans:"ans4"
        },
        {
            question:'Q2:What is Full Form Of CSS?',
            a:"Cascading Style Sheets",
            b:"Cascading Style Cheep",
            c:"Cascading Super Sheets",
            d:"Cartoon Style Sheet",
            ans:"ans1"
        },
        {
            question:'Q3:What is Full Form Of HTTP?',
            a:"Hello To My Land",
            b:"Here Text Markup Language",
            c:"Hyper Text Markup Languages",
            d:"Hyper Text Markup Language",
            ans:"ans4"
        },
        {
            question:'Q4:What is Full Form Of JS?',
            a:"JavaScript",
            b:"JavaSuper",
            c:"JustScript",
            d:"JordenShoes",
            ans:"ans1"
        },
    ];


    const question = document.querySelector('.question')
    const option1 = document.querySelector('#option1');
    const option2 = document.querySelector('#option2');
    const option3 = document.querySelector('#option3');
    const option4 = document.querySelector('#option4');

    const submit = document.querySelector('#submit');
    
    const answeres = document.querySelectorAll('.answer')
    
    const showScore = document.querySelector('#show-score');
    
    
    let questionCount = 0;
    let score = 0;
    
    const loadQuestion = () =>{
        //console.log(quizDB[0].question)

        const questionList = quizDB[questionCount]
        
        question.innerText = questionList.question;

        option1.innerText = questionList.a
        option2.innerText = questionList.b
        option3.innerText = questionList.c
        option4.innerText = questionList.d
        

    }


    loadQuestion();

    const getCheckAnswer=()=>{

        let answer;
        answeres.forEach((currentElement)=>{

                if(currentElement.checked){
                    answer = currentElement.id;
                }
               // alert(currentElement);
                
            })
            return answer;
    }

    submit.addEventListener('click',()=>{
        const checkedAnswer = getCheckAnswer();
        console.log(checkedAnswer);
        if(checkedAnswer === quizDB[questionCount].ans){
            score++;
        }
        questionCount++;

        if(questionCount < quizDB.length)
        {
            loadQuestion();
        }else{
            showScore.innerHtml= `<h3>You Scored ${score}/${quizDB.length} </h3><button class="btn" onclick="location.reload()"></button>`;
            showScore.classList.remove('scorearea');
        }

    });

        </script>

</body>
</html>