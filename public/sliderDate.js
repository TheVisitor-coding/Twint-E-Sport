const productContainers = document.querySelectorAll('.container-date');
const nxtBtn = [...document.querySelectorAll('#suivant')];
const prevBtn = [...document.querySelectorAll('#precedent')];

productContainers.forEach((item, i) =>{
  let containerDimensions = item.getBoundingClientRect();
  let containerWidth = containerDimensions.width;

  if(nxtBtn[i]){
  nxtBtn[i].addEventListener('click', () => {
    item.scrollLeft += containerWidth;
  }
  )};
  if(prevBtn[i]){
  prevBtn[i].addEventListener('click', () => {
    item.scrollLeft -= containerWidth;
  }
  )};
});