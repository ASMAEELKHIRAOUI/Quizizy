let progress = document.querySelector("#progress");
let next = document.getElementById("start");
let steps = document.querySelectorAll(".step");
let qst = document.getElementById("qst");
let choice1 = document.getElementById("choice1");
let choice2 = document.getElementById("choice2");
let choice3 = document.getElementById("choice3");
let choice4 = document.getElementById("choice4");
// let number = document.getElementById("number");
let submit = document.getElementById('submit');
// let submit = document.getElementById("start");

submit.addEventListener('click', nextQst);
next.addEventListener("click",function (){
  counter();
  displayQst(); 
});
// next.addEventListener('click',[nextQst , counter]);


let qsts = [
  {
    qst: "Why is AWS more economical than traditional data centers for applications with varying compute workloads?",
    choice1: "Amazon EC2 costs are billed on a monthly basis",
    choice2: "Users retain full administrative access to their Amazon EC2 instances.",
    choice3: "Amazon EC2 instances can be launched on demand when needed",
    choice4: "Users can permanently run enough instances to handle peak workloads.",
    correct: "3",
  },
  {
    qst: "Which AWS service would simplify the migration of a database to AWS?",
    choice1: "AWS Storage Gateway",
    choice2: "AWS Database Migration Service (AWS DMS)",
    choice3: "Amazon EC2",
    choice4: "Amazon AppStream 2.0",
    correct: "2",
  },
  {
    qst: " Which AWS offering enables users to find, buy, and immediately start using software solutions in their AWS?",
    choice1: "AWS Config",
    choice2: "AWS OpsWorks",
    choice3: "AWS SDK",
    choice4: "AWS Marketplace",
    correct: "4",
  },
  {
    qst:"Wich AWS networking service enables a company to create a virtual network within AWS?",
    choice1: "AWS Config",
    choice2: "Amazon Route 53",
    choice3: "AWS Direct Connect",
    choice4: "Amazon Virtual Private Cloud (Amazon VPC)",
    correct: "4",
  },
  {
    qst: "Which of the following is an AWS responsibility under the AWS shared responsibility model?",
    choice1: "Configuring third-party applications",
    choice2: "Maintaining physical hardware",
    choice3: "Securing application access and data",
    choice4: "Managing guest operating systems",
    correct: "2",
  },
  {
    qst: "Which component of the AWS global infrastructure does Amazon CloudFront use to ensure low-latency delivery?",
    choice1: "AWS Regions",
    choice2: "Edge locations",
    choice3: "Availability Zones",
    choice4: "Virtual Private Cloud (VPC)",
    correct: "2",
  },
  {
    qst: "How would a system administrator add an additional layer of login security to a user's AWS Management Console?",
    choice1: "Use Amazon Cloud Directory",
    choice2: "Audit AWS Identity and Access Management (IAM) roles",
    choice3: "Enable multi-factor authentication",
    choice4: "Enable AWS CloudTrail",
    correct: "3",
  },
  {
    qst: "Which service can identify the user that made the API call when an Amazon EC2 instance is terminated?",
    choice1: "AWS Trusted Advisor",
    choice2: "AWS CloudTrail",
    choice3: "AWS X-Ray",
    choice4: "AWS Identity and Access Management (AWS IAM)",
    correct: "2",
  },
  {
    qst: "Which service would be used to send alerts based on Amazon CloudWatch alarms?",
    choice1: "Amazon Simple Notification Service (Amazon SNS)",
    choice2: "AWS CloudTrail",
    choice3: "AWS Trusted Advisor",
    choice4: "Amazon Route 53",
    correct: "1",
  },
  {
    qst: "Where can a user find information about prohibited actions on the AWS infrastructure?",
    choice1: "AWS Trusted Advisor",
    choice2: "AWS Identity and Access Management (IAM)",
    choice3: "AWS Billing Console",
    choice4: "AWS Acceptable Use Policy",
    correct: "4",
  },
];

let qstIndex = 0;

function displayQst(qstIndex){
  qst.innerHTML = qsts[qstIndex].qst;
  choice1.innerHTML = qsts[qstIndex].choice1;
  choice2.innerHTML = qsts[qstIndex].choice2;
  choice3.innerHTML = qsts[qstIndex].choice3;
  choice4.innerHTML = qsts[qstIndex].choice4;
  // number.innerHTML = qstIndex + 1;
}

submit.addEventListener('click', displayQst);
// console.log(submit.addEventListener('click', nextQst));
next.addEventListener('click', nextQst);


// console.log(qstIndex);

function nextQst(){
  if(qstIndex < qsts.length){
    displayQst(qstIndex);
    qstIndex++;
    // showProgress();
  }
  // for(qstIndex=0 ; qstIndex < qsts.length - 1 ; qstIndex++){
  //   displayQst(qstIndex);
  // }
}
function answerSubmit(answer){
  if(answer == qsts[qstIndex].correct){
    // score++;
    choice = "correct";
  }
  else{
    choice = "wrong";
  }}

//   // nextQst();
//   // console.log(score);
//   console.log(choice);
// }


function update() {
    for (let i = 0; i<steps.length; i++) {
        let step = steps[i];
        if (i < current) { //checks whether the current case of the loop represents a step that has already been completed
          step.classList.add("active");
        }
    };

  let actives = document.querySelectorAll(".active");
  let width = (actives.length / steps.length) * 10;
  progress.style.width = width + "%"; 
};

let current = 1;
function counter(){
  current++;
  update();
}

// next.addEventListener("click",[nextQst , counter]);