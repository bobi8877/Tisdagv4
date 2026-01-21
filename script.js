const toggleInfoBtn = document.querySelector("#toggleInfoBtn");
const extraInfo = document.querySelector("#extraInfo");

toggleInfoBtn.addEventListener("click", () => {
    if (extraInfo.style.display === "none") {
        extraInfo.style.display = "block";
    } else {
        extraInfo.style.display = "none";
    }
});

const addLaunchBtn = document.querySelector("#addLaunchBtn");
const launchCountEl = document.querySelector("#launchCount");

let launchCount = 0;

addLaunchBtn.addEventListener("click", () => {
    launchCount += 1;
    launchCountEl.textContent = launchCount;
});
