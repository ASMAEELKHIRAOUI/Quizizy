const progress = document.querySelector("#progress");
const prev = document.querySelector("#prev");
const next = document.querySelector("#next");
const steps = document.querySelectorAll(".step");
const update = () => {
    steps.forEach((step, i) => {
        i < currActive
            ? step.classList.add("active")
            : step.classList.remove("active");
    });
    // const actives = document.querySelectorAll(".active");
    // const height = ((actives.length - 1) / (steps.length - 1));
    // progress.style.height = `${height}`;

    if (currActive === 1) {
        prev.disabled = true;
    } else if (currActive === steps.length) {
        next.disabled = true;
    } else {
        prev.disabled = false;
        next.disabled = false;
    }
};

let currActive = 1;

next.addEventListener("click", () => {
    currActive++;

    if (currActive > steps.length) {
        currActive = steps.length;
    }
    update();
});
prev.addEventListener("click", () => {
    currActive--;

    if (currActive < 1) {
        currActive = 1;
    }
    update();
});
