const enCoursBtn = document.querySelector("#en-cours-btn");
const aVenirBtn = document.querySelector("#a-venir-btn");

enCoursBtn.addEventListener("click", function(event) {
  event.preventDefault();
  enCoursBtn.classList.add("active");
  aVenirBtn.classList.remove("active");
});

aVenirBtn.addEventListener("click", function(event) {
  console.log('oui')
  event.preventDefault();
  aVenirBtn.classList.add("active");
  enCoursBtn.classList.remove("active");
});
