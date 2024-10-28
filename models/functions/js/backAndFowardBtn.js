const scroll = 200;
function smoothScroll(element, distance) {
  let start = element.scrollLeft;
  let startTime = null;
  const duration = 600;
  function animation(currentTime) {
    if (!startTime) startTime = currentTime;
    const timeElapsed = currentTime - startTime;
    const run = ease(timeElapsed, start, distance, duration);
    element.scrollLeft = run;
    if (timeElapsed < duration) {
      requestAnimationFrame(animation);
    }
  }
  function ease(t, b, c, d) { 
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }
  requestAnimationFrame(animation);
}
const fowardBtn = ()=>{
  const bookBox = document.getElementById('middle-content');
  smoothScroll(bookBox, scroll); 
}
const backBtn = ()=>{
  const bookBox = document.getElementById('middle-content');
  smoothScroll(bookBox, -scroll); 
}
const fowardBtn2 = ()=>{
  const bookBox = document.getElementById('middle-content2');
  smoothScroll(bookBox, scroll); 
}
const backBtn2 = ()=>{
  const bookBox = document.getElementById('middle-content2');
  smoothScroll(bookBox, -scroll); 
}
const fowardBtn3 = ()=>{
  const bookBox = document.getElementById('middle-content3');
  smoothScroll(bookBox, scroll); 
}
const backBtn3 = ()=>{
  const bookBox = document.getElementById('middle-content3');
  smoothScroll(bookBox, -scroll); 
}