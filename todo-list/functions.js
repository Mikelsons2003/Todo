function myFunction() {

    event.preventDefault();
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
      btn.textContent = 'Registration';
      x.style.display = "block";
    } else {
      btn.textContent = 'Login';
      x.style.display = "none";
    }
    
    var y = document.getElementById("myDIVs");
    if (y.style.display === "block") {
      btn.textContent = 'Registration';
      y.style.display = "none";
    } else {
      btn.textContent = 'Login';
      y.style.display = "block";
    }
    }
    
    
    
    function getValue(inputSet) {
        event.preventDefault();
        let form = document.getElementById('form');
        let msg = document.getElementById('msg');
        let formData = new FormData(form);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            msg.innerHTML = this.responseText;
            window.location.href = "http://into.id.lv/ip19/miks/todo-list/todo.php";
        }
      };
        xmlhttp.open("POST", inputSet, true);
        xmlhttp.send(formData);
    }