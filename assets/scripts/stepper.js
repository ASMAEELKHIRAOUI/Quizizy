let progress = document.querySelector("#progress");
let next = document.querySelector(".start");
let steps = document.querySelectorAll(".step");

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

next.addEventListener("click", function(){
  current++;
  update();
});