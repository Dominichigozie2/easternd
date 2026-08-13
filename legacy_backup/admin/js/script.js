// This script is optional, it just toggles a class to indicate if the dropdown is open or closed
document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('ul li');
    dropdowns.forEach(function(dropdown) {
      dropdown.addEventListener('click', function() {
        dropdown.classList.toggle('open');
      });
    });
  });

  

const navBar= document.querySelector(".fa-bars");

navBar.addEventListener("click", ()=>{
    const navMenu = document.querySelector(".nav");
    const navClose = document.querySelector(".fa-times");

    navMenu.classList.add("active");
    navClose.addEventListener("click", ()=>{
      navMenu.classList.remove("active");
    });
});



document.querySelectorAll('.openModalBtn').forEach(btn => {
  btn.addEventListener('click', function() {
      const modal = document.getElementById('myModal');
      const confirmBtn = modal.querySelector('#confirmBtn');
      const id = this.getAttribute('data-id');
      
      // Update the confirm button URL with the correct ID
      confirmBtn.href = `./pbdelete.php?id=${id}`;
      
      // Show the modal
      modal.style.display = 'block';
  });
});

document.querySelectorAll('.modal').forEach(modal => {
  const span = modal.querySelector('.close');
  const cancelBtn = modal.querySelector('#cancelBtn');

  // Close the modal when clicking on the close button (span)
  span.addEventListener('click', function() {
      modal.style.display = 'none';
  });

  // Close the modal when clicking Cancel
  cancelBtn.addEventListener('click', function() {
      modal.style.display = 'none';
  });

  // Close the modal if the user clicks anywhere outside of it
  window.addEventListener('click', function(event) {
      if (event.target === modal) {
          modal.style.display = 'none';
      }
  });
});




document.querySelectorAll('.CopenModalBtn').forEach(Cbtn => {
  Cbtn.addEventListener('click', function() {
      const Cmodal = document.getElementById('CmyModal');
      const CconfirmBtn = Cmodal.querySelector('#CconfirmBtn');
      const Cid = this.getAttribute('data-id');
      
      // Update the confirm button URL with the correct ID
      CconfirmBtn.href = `./cbdelete.php?id=${Cid}`;
      
      // Show the modal
      Cmodal.style.display = 'block';
  });
});

document.querySelectorAll('.Cmodal').forEach(Cmodal => {
  const Cspan = Cmodal.querySelector('.Cclose');
  const CcancelBtn = Cmodal.querySelector('#CcancelBtn');

  // Close the modal when clicking on the close button (span)
  Cspan.addEventListener('click', function() {
      Cmodal.style.display = 'none';
  });

  // Close the modal when clicking Cancel
  CcancelBtn.addEventListener('click', function() {
      Cmodal.style.display = 'none';
  });

  // Close the modal if the user clicks anywhere outside of it
  window.addEventListener('click', function(event) {
      if (event.target === Cmodal) {
          Cmodal.style.display = 'none';
      }
  });
});


document.querySelectorAll('.EopenModalBtn').forEach(Ebtn => {
  Ebtn.addEventListener('click', function() {
      const Emodal = document.getElementById('EmyModal');
      const EconfirmBtn = Emodal.querySelector('#EconfirmBtn');
      const Eid = this.getAttribute('data-id');

      console.log("Hello World");
      // Update the confirm button URL with the correct ID
      EconfirmBtn.href = `./edelete.php?id=${Eid}`;
      
      // Show the modal
      Emodal.style.display = 'block';
  });
});

document.querySelectorAll('.Emodal').forEach(Emodal => {
  const Espan = Emodal.querySelector('.Eclose');
  const EcancelBtn = Emodal.querySelector('#EcancelBtn');

  // Close the modal when clicking on the close button (span)
  Espan.addEventListener('click', function() {
      Emodal.style.display = 'none';
  });

  // Close the modal when clicking Cancel
  EcancelBtn.addEventListener('click', function() {
      Emodal.style.display = 'none';
  });

  // Close the modal if the user clicks anywhere outside of it
  window.addEventListener('click', function(event) {
      if (event.target === Emodal) {
          Emodal.style.display = 'none';
      }
  });
});

