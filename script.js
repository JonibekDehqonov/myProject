  const modal = document.querySelector('#modal');
  const openModalBtn = document.querySelector('#openModal');
  const closeBtn = document.querySelector('.close');
  // const btnModal = document.querySelectorAll('.btnModal')

  openModalBtn.addEventListener('click', () => {
    modal.style.display = 'block';
  });

  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
  // btnModal[2].addEventListener('click', () => {
  //   modal.style.display = 'none';
  // });



  const menu = document.querySelector('.menu');
  const conUl = document.querySelector('.ull');
  menu.addEventListener('click', () => {
    conUl.classList.toggle("conUl")

  });
  // const menu1 = document.querySelectorAll('.menu1');
  // const menuUl = document.querySelectorAll('.menuUl');
  // var i=0;
  //    menu1[i].addEventListener('click', () => {
      
  //     menuUl[i].classList.toggle("leftUlli")

  //   });

  const regizd=document.querySelector('.btnRegizd')
  const modal2 = document.querySelector('#modal2');
  const closeBtn2 = document.querySelector('.close2');
  regizd.addEventListener('click',()=>{
    modal.style.display = 'none';
    modal2.style.display = 'block';
  });

  closeBtn2.addEventListener('click', () => {
    modal2.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
    if (event.target === modal2) {
      modal2.style.display = 'none';
    }
  });
  const regizd3=document.querySelector('.btnModal3')
  const modal3 = document.querySelector('#modal3');
  const closeBtn3= document.querySelector('.close3');
  regizd3.addEventListener('click',()=>{
    modal2.style.display = 'none';
    modal3.style.display = 'block';
  });

  closeBtn3.addEventListener('click', () => {
    modal2.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
    if (event.target === modal3) {
      modal3.style.display = 'none';
    }
  });




