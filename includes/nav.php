<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
/* -----------HEADER------------- */
body {
    margin: 0%;
    padding: 0;
}

* {
    box-sizing: border-box;
}
header {
    background-color: aliceblue;
    padding: 10px;
    border-bottom: solid rgb(114, 49, 2) 4px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    position: fixed;
  top: 0px;
  left: 0;
  width: 100%;
  z-index:1;
  
}

header h2 {
    padding: 0%;
    margin: 0%;
    color: #00356B;
    font-size: 1.8rem;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

header h3 {
    padding: 0%;
    margin: 0%;
    color: rgb(2, 114, 2);
    font-size: 1rem;
    font-family: 'Times New Roman', Times, serif;
}

ul {
    margin: 0%;
    padding: 0;
    overflow: hidden;
    background-color: #00356B;
    list-style-type: none;
    position: fixed;
    color:white;
  top: 56px;
  left: 0;
  width: 100%;
  z-index:1;

}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 42px;
    text-decoration: none;
    font-weight: bolder;
    font-size: 1rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

@media only screen and (max-width: 600px) {
    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 6px 7px;
        text-decoration: none;
        font-weight: thin;
        font-size: 0.6rem;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }


    header h3 {
        display: none;
    }

    svg {
        width: 20px;
        height: 20px;
        color: white;
    }
}


@media (min-width: 576px) and (max-width: 992px) {
        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 6px 40px;
        text-decoration: none;
        font-weight: thin;
        font-size: 0.8rem;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
}


li:hover{
    background-color: #0C2340;
    color: aliceblue;

}

.active{
    background-color: #0C2340;
    color: aliceblue;

}



</style>

</head>

<body>
    
       
            <header >
               <h2>H02MANAGER</h2> 
               <h3>Water Management</h3>
            </header>
            <ul>
                <li class="active">
                    <a href="dashbord.php">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="white"><path d="M226.67-186.67h140v-246.66h226.66v246.66h140v-380L480-756.67l-253.33 190v380ZM160-120v-480l320-240 320 240v480H526.67v-246.67h-93.34V-120H160Zm320-352Z"/></svg><br>
                     Dashbord
                    </a>
                </li>
                <li>
                    <a href="production.php">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="white"><path d="M480-582.67q-15.3 0-25.65-10.35Q444-603.37 444-618.67q0-15.3 10.35-25.65 10.35-10.35 25.65-10.35 15.3 0 25.65 10.35Q516-633.97 516-618.67q0 15.3-10.35 25.65-10.35 10.35-25.65 10.35ZM446.67-720v-200h66.66v200h-66.66ZM286.53-80q-30.86 0-52.7-21.97Q212-123.95 212-154.81q0-30.86 21.98-52.69 21.97-21.83 52.83-21.83t52.69 21.97q21.83 21.98 21.83 52.84 0 30.85-21.97 52.69Q317.38-80 286.53-80Zm402.66 0q-30.86 0-52.69-21.97-21.83-21.98-21.83-52.84 0-30.86 21.97-52.69 21.98-21.83 52.84-21.83 30.85 0 52.69 21.97Q764-185.38 764-154.52q0 30.85-21.97 52.69Q720.05-80 689.19-80ZM54.67-813.33V-880h121l170 362.67H630.8l158.87-280h75L698-489.33q-11 19.33-28.87 30.66-17.88 11.34-39.13 11.34H328.67l-52 96H764v66.66H282.67q-40.11 0-61.06-33-20.94-33-2.28-67L280-496 133.33-813.33H54.67Z"/></svg><br>
                      Production
                    </a>
               </li>
                <li>
                    <a href="discription.php">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="white"><path d="M602.67-120v-123.33h-156V-650H358v126.67H80V-840h278v123.33h244.67V-840H880v316.67H602.67V-650h-89.34v340h89.34v-126.67H880V-120H602.67Zm-456-653.33V-590v-183.33ZM669.33-370v183.33V-370Zm0-403.33V-590v-183.33Zm0 183.33h144v-183.33h-144V-590Zm0 403.33h144V-370h-144v183.33ZM146.67-590h144.66v-183.33H146.67V-590Z"/></svg><br>
                        Discription
                    </a>
                </li>
                <li>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="white"><path d="M452.67-491.33ZM94.33-540Q87-560.33 83.5-580.67 80-601 80-623.67q0-92 61.67-154.16Q203.33-840 293.33-840q55 0 103.5 25T480-742.67Q515.33-790 563.33-815t103.34-25q90 0 151.66 62.17Q880-715.67 880-623.67q0 3.67-.33 6.67-.34 3-.34 6.67-15.66-14.34-32.66-25.5Q829.67-647 810-655q-10-52.33-49-85.33t-94.33-33q-48.34 0-91 29.5-42.67 29.5-71.34 83.16h-48.66q-28.34-52.66-71.34-82.66t-91-30q-62.33 0-104.5 43.16-42.16 43.17-42.16 106.5 0 22.17 5 42.25 5 20.09 15.66 41.42h-73ZM480-120.67l-108.33-98.66q-40.34-37-72-66.67-31.67-29.67-56.34-54h95q27.67 26 62.84 58 35.16 32 78.83 72.67 21.19-17.97 39.26-34.65 18.07-16.69 34.74-32.35 12 12.33 24.83 21.83 12.84 9.5 27.5 18.17-4.66 4.66-9.33 9-4.67 4.33-10 9l-107 97.66Zm239.88-166q-14.21 0-23.71-9.61-9.5-9.62-9.5-23.84 0-14.21 9.61-23.71 9.62-9.5 23.84-9.5 14.21 0 23.71 9.61 9.5 9.62 9.5 23.84 0 14.21-9.61 23.71-9.62 9.5-23.84 9.5Zm-33.21-120v-186.66h66.66v186.66h-66.66Zm-640 0v-66.66H222L293.33-579q5.03-7.59 12.16-10.96 7.13-3.37 15.51-3.37 8.38 0 15.51 3.83 7.13 3.83 12.16 11.5L418-473.33h71.33q-1.33 8.33-2 16.25-.66 7.91-.66 17.08 0 9.17.66 17.08.67 7.92 2 16.25H400q-8.67 0-15.67-4t-12-10.66L320-500l-52.33 78.67q-5 6.66-12 10.66t-15.67 4H46.67Z"/></svg><br>
                        Expensive
                    </a>
                </li>
                <li>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="white"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg><br>
                        Setting
                    </a>
                </li>
                <li>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="white"><path d="M186.67-120q-27 0-46.84-19.83Q120-159.67 120-186.67v-586.66q0-27 19.83-46.84Q159.67-840 186.67-840h292.66v66.67H186.67v586.66h292.66V-120H186.67Zm470.66-176.67-47-48 102-102H360v-66.66h351l-102-102 47-48 184 184-182.67 182.66Z"/></svg><br>
                        Logout
                    </a>
                </li>
            </ul>

     
      
       
</body>
</html>