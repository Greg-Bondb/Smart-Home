function getData() {
    fetch('http://192.168.137.10/data')
      .then(response => response.json())
      .then(data => {
          console.log("temperature : "+ data.temperature)
      //   Afficher les données sur la page
        document.getElementById('data1').innerHTML = data.temperature;
        //console.log("humidity : "+ data.humidity)
      //   Afficher les données sur la page
        //document.getElementById('data2').innerHTML = data.humidity;
  
        console.log("flame : "+ data.flame)
      //   Afficher les données sur la page
        document.getElementById('data3').innerHTML = data.flame;
  
        console.log("motion : "+ data.motion)
      //   Afficher les données sur la page
        document.getElementById('data4').innerHTML = data.motion;
  
        //console.log("micro : "+ data.micro)
      //   Afficher les données sur la page
        //document.getElementById('data5').innerHTML = data.micro;
  
        console.log("gas : "+ data.gas)
      //   Afficher les données sur la page
        document.getElementById('data6').innerHTML = data.gas;
  
        console.log("photo : "+ data.photo)
      //   Afficher les données sur la page
        document.getElementById('data7').innerHTML = data.photo;
  
        console.log("ultrasonic : "+ data.ultrasonic)
      //   Afficher les données sur la page
        document.getElementById('data8').innerHTML = data.ultrasonic;
      })
      //.catch(error => console.error(error));
  }
  
  // Appeler la fonction getData toutes les 15 secondes
  setInterval(getData, 5000);
  // getData();