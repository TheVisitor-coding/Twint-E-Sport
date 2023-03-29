const enCoursBtn = document.querySelector("#en-cours-btn");
const aVenirBtn = document.querySelector("#a-venir-btn");

enCoursBtn.addEventListener("click", function() {
  enCoursBtn.classList.add("active");
  aVenirBtn.classList.remove("active");
});

aVenirBtn.addEventListener("click", function() {
  aVenirBtn.classList.add("active");
  enCoursBtn.classList.remove("active");
});
