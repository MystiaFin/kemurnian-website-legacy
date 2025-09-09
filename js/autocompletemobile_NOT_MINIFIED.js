function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
  }
  
  /*An array containing all the country names in the world:*/
  var result = ["About Us",
                "Art Day TK Kemurnian I & II",
                "Art Day TK Kemurnian III",
                "Batik Day",
                "Berita",
                "Event",
                "Kegiatan Sekolah",
                "Kemurnian School English Program",
                "Kurikulum SD",
                "Kurikulum SMA",
                "Kurikulum SMP",
                "Kurikulum TK",
                "Lomba HUT RI Ke-77",
                "Market Day TK Kemurnian II",
                "Natal SD Kemurnian I",
                "Natal SD Kemurnian III",
                "Natal SMA Kemurnian II",
                "News",
                "Open House",
                "Open House Highlights",
                "P5 SMP Kemurnian II",
                "Pertemuan Tatap Muka SMA Kemurnian II",
                "Promo Oktober Nonstop",
                "Promo Prestasi PPKM (Prestasi KeMurnian)",
                "Promo September Ceria",
                "Protokol Kebersihan Saat Di Sekolah",
                "SD Kemurnian I",
                "SD Kemurnian II",
                "SD Kemurnian III",
                "Sekolah Kemurnian I",
                "Sekolah Kemurnian II",
                "Sekolah Kemurnian III",
                "SMA Kemurnian II",
                "SMP Kemurnian I",
                "SMP Kemurnian II",
                "Tahun Baru 2022 SD Kemurnian III",
                "Tahun Baru Imlek 2022",
                "TK Kemurnian I",
                "TK Kemurnian II",
                "TK Kemurnian III",
                "Upacara Bendera HUT RI Ke-77",
                "Upcycling Workshop SMP Kemurnian II",
                "Vaksinasi Siswa Siswi SD Kemurnian II",
                "Vaksinasi MR & HPV SD Kemurnian II"
              ];
  
  /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
  autocomplete(document.getElementById("myInputMob"), result);
  
  function openPageMob(){
      var x = document.getElementById("myInputMob").value
  
      if (x == "About Us"){
        window.location.href="about.html"
      }
  
      if (x == "Art Day TK Kemurnian I & II"){
        window.location.href="art-day-tk-kemurnian-1-2.html"
      }
  
      if (x == "Art Day TK Kemurnian III"){
        window.location.href="art-day-tk-kemurnian-3-september-2022.html"
      }
  
      if (x == "Batik Day"){
        window.location.href="batikday.html"
      }
  
      if (x == "Berita"){
        window.location.href="news.html"
      }
  
      if (x == "Event"){
        window.location.href="news.html"
      }
  
      if (x == "Kegiatan Sekolah"){
        window.location.href="news.html"
      }
  
      if (x == "Kemurnian School English Program"){
        window.location.href="kurikulum-english.html"
      }
  
      if (x == "Kurikulum SD"){
        window.location.href="kurikulum-sd.html"
      }
  
      if (x == "Kurikulum SMP"){
        window.location.href="kurikulum-smp.html"
      }
  
      if (x == "Kurikulum SMA"){
        window.location.href="kurikulum-sma.html"
      }
  
      if (x == "Kurikulum TK"){
        window.location.href="kurikulum-tk.html"
      }
  
      if (x == "Lomba HUT RI Ke-77"){
        window.location.href="perayaan-hutri-77.html"
      }
  
      if (x == "Market Day TK Kemurnian II"){
        window.location.href="marketday2.html"
      }
  
      if (x == "Natal SD Kemurnian I"){
        window.location.href="natal-2021-sd-kemurnian-1.html"
      }
  
      if (x == "Natal SD Kemurnian III"){
        window.location.href="misa-natal-sd-kemurnian-3.html"
      }
  
      if (x == "Natal SMA Kemurnian II"){
        window.location.href="misa-natal-sma-kemurnian-2.html"
      }
  
      if (x == "News"){
        window.location.href="news.html"
      }
  
      if (x == "Open House"){
        window.location.href="promo-open-house.html"
      }
  
      if (x == "Open House Highlights"){
        window.location.href="openhouse22.html"
      }
  
      if (x == "P5 SMP Kemurnian II"){
        window.location.href="p5-smp.html"
      }
  
      if (x == "Pertemuan Tatap Muka SMA Kemurnian II"){
        window.location.href="ptm-sma-kemurnian-2.html"
      }
  
      if (x == "Promo Oktober Nonstop"){
        window.location.href="promo-oktober22.html"
      }
  
      if (x == "Promo Prestasi PPKM (Prestasi KeMurnian)"){
        window.location.href="promo2.html"
      }
  
      if (x == "Promo September Ceria"){
        window.location.href="promo-september-ceria.html"
      }
  
      if (x == "Protokol Kebersihan Saat Di Sekolah"){
        window.location.href="protokol-kesehatan.html"
      }
  
      if (x == "SD Kemurnian I"){
        window.location.href="sd-kemurnian-1.html"
      }
  
      if (x == "SD Kemurnian II"){
        window.location.href="sd-kemurnian-2.html"
      }
  
      if (x == "SD Kemurnian III"){
        window.location.href="sd-kemurnian-3.html"
      }
  
      if (x == "Sekolah Kemurnian I"){
        window.location.href="sekolah-kemurnian-1.html"
      }
  
      if (x == "Sekolah Kemurnian II"){
        window.location.href="sekolah-kemurnian-2.html"
      }
  
      if (x == "Sekolah Kemurnian III"){
        window.location.href="sekolah-kemurnian-3.html"
      }
  
      if (x == "SMA Kemurnian II"){
        window.location.href="sma-kemurnian-2.html"
      }
  
      if (x == "SMP Kemurnian I"){
        window.location.href="smp-kemurnian-1.html"
      }
  
      if (x == "SMP Kemurnian II"){
        window.location.href="smp-kemurnian-2.html"
      }
  
      if (x == "Tahun Baru 2022 SD Kemurnian III"){
        window.location.href="new-year-2022-sd-kemurnian-3.html"
      }
  
      if (x == "Tahun Baru Imlek 2022"){
        window.location.href="imlek2022.html"
      }
  
      if (x == "TK Kemurnian I"){
        window.location.href="tk-kemurnian-1.html"
      }
  
      if (x == "TK Kemurnian II"){
        window.location.href="tk-kemurnian-2.html"
      }
  
      if (x == "TK Kemurnian III"){
        window.location.href="tk-kemurnian-3.html"
      }
  
      if (x == "Upacara Bendera HUT RI Ke-77"){
        window.location.href="upacara-hutti22.html"
      }
  
      if (x == "Upcycling Workshop SMP Kemurnian II"){
        window.location.href="upcycling-workshop.html"
      }
  
      if (x == "Vaksinasi Siswa Siswi SD Kemurnian II"){
        window.location.href="vaksinasi-sd-kemurnian-2.html"
      }
  
      if (x == "Vaksinasi MR & HPV SD Kemurnian II"){
        window.location.href="vaksinasi-sd-kemurnian-2-september-2022.html"
      }
  
  }
  
  // Get the input field
  var input = document.getElementById("myInputMob");
  // Execute a function when the user releases a key on the keyboard
  input.addEventListener("keyup", function(event) {
    // Number 13 is the "Enter" key on the keyboard
    if (event.keyCode === 13) {
      // Cancel the default action, if needed
      event.preventDefault();
      // Trigger the button element with a click
      document.getElementById("search-button-mob").click();
    }
  });