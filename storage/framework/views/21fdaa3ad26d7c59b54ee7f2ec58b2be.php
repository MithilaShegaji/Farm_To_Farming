<style>
body {
    margin: 0;
    padding: 0;
}
img {
    width: 60px;
    padding: 5px;
    margin: 5px;
    cursor: pointer;
   
}

.container {
    background-color: rgb(64, 123, 64);
    display: flexbox;
    /* margin: 5px; */
}
/* Adjust the button alignment */
.dropdown {
    position: absolute;
    right: 100px;
}

/* Style the dropdown button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    margin: 25px;
    position: absolute;
}
/* Style the dropdown button */
.dropdown button.dropdown-toggle {
    background-color: #4CAF50;
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 100; /* Increase the z-index to ensure it stays above other content */
    list-style: none;
    padding: 0;
    margin: 0;
}

.dropdown-content li {
    padding: 0;
}

.dropdown-content a.dropdown-item {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}


.dropdown-content a.dropdown-item:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
    position:absolute;
}

.box {
    width: 1340px;
    background-color: yellow;
    padding: 5px;
    justify-content: center;
    align-items: center;

}

 .form-control {
    justify-content: center;
    align-items: center;
    padding: 5px;
} 

.container-fluid{
    display: inline-flex;
    
}

.cards{
    display: flex;
    padding: 10px;
    }

.card-items {
    width: 500px;
    border-radius: 5px;
    border: 5px;
    border-color: aliceblue;
    padding: 15px;
    display: inline-flex;
    margin: 0 15px;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.card {
    padding: 15px;
    margin: auto;
}
.lines{
    display:flex;
}
.View , .Book{
    cursor: pointer;
   width: 50px;
   height: 30px;
   margin: 3px;
   background-color: #4CAF50;
   color: white;
   font-size: 16px;
   border: none;
   justify-content: center;
   align-items: center;
   border-radius: 7px;
}
.available-lands{
    cursor: pointer;
   width: 150px;
   border: none;
   margin: 5px;
   height: 40px;
    justify-content: center;
    align-items: center;
    background-color: #4CAF50;
    color: white;
  border-radius: 7px;
  font-size: 18px;
}

.card-items img{
    width: 200px;
}
 .center-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0;
    margin: 0;
} 

.box {
    width: 1400px; 
}
.center-button {
    margin: 5px;
    text-align: center;
}
.flex-all-centre{
    display: flex;
    justify-content: center;
    align-items: center;
    }
    .flex-all-centre p{
        text-decoration: none;
    }
    footer {
        height: 12vh;
        background-color: rgb(229, 229, 113);
        color: rgb(2, 52, 2);
        font-weight: bolder;
        width: auto;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
</style><?php /**PATH C:\xampp\htdocs\FarmToFarming\farmtofarming\resources\views/ClientDashboard/css.blade.php ENDPATH**/ ?>