</body>
<script>
    
    document.addEventListener("DOMContentLoaded", function() {

      let buttons = document.querySelectorAll("#btn_js");
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                alert("Added");
            });
        });

        // 
         
      let btn = document.querySelector("button");
      
      btn.addEventListener("click" , () => {
          let email = document.querySelector("#email_form").value;
          let validationCustomUsername = document.querySelector('#validationCustomUsername').value = email
      })
      //
      const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
      const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
      
      
      //
      const myModal = document.getElementById('myModal')
      const myInput = document.getElementById('myInput')
      
      myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
      })  
        let profileModal = document.getElementById('profileModal');

            profileModal.addEventListener('shown.bs.modal', function () {
            document.getElementById('validationCustom01').focus(); // I-set ang focus sa unang input field
    });
});

  
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
