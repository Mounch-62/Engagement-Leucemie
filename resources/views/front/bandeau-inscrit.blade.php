@extends('base')

    @section('bandeau inscrit')
    @show
    <div class="d-flex flex-nowrap align-self-center mt-2 ">
        <div class="d-flex justify-content-around bg-primary w-100 "> 
            <div class="flex-item align-self-center ">           
                <a class="  mt-auto text-light  text-decoration-none">NOS CHIFFRES</a>
                <a class="fw-bold  text-light text-decoration-none">MARQUANTS :</a>
            </div> 
            <div class="flex-item align-self-center " >
            <i class="bi bi-person-fill-add fa-5x fs-1 " style="color:#ffffff"></i>
                <a class="text-black font-weight-bold text-decoration-none  fs-3">800</a>
                <a class="text-decoration-none text-light ">  sensibilisés</a>
            </div>
            <div class="flex-item align-self-center  ">
                <i class="bi bi-person-fill-add fs-1 " style="color:#ffffff"></i>
                <a class="text-black font-weight-bold text-decoration-none  fs-3"> 640 </a>
                <a class="text-decoration-none text-light"> inscrits</a>
            </div>
        </div>  
    </div>
</body>

</html>