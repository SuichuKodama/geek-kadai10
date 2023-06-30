let inputElements = document.querySelectorAll('input');
console.log(inputElements)

for (let i of inputElements) {
  if( i.type !== 'submit' ) {
    i.addEventListener('focusin', function(e) {
      i.blur();
      return false;
    })

    i.addEventListener('click', function(e) {
      e.preventDefault();
    })
  }
}