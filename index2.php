<?php

include('controller/function.php');

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <style>
            #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            }
            input[type=text], .count-data  {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
            .pagination {
            display: inline-block;
            float: right;
            margin-top: 20px;
            }

            .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid;
            }
            header {
            color: #fff;
            text-align: center;
            min-height: 140px;
            margin-bottom: 60px;
                }

                header h1{
                    margin-top: 100px;
                    font-size: 50px;
                    margin-bottom: 20px;
                    font-weight: 100;
                }

                header a{
                    font-size: 18px;
                    margin-left: 20px;
                }

                .copyright {
                    font-size: 25px;
                    font-weight: 100;
                    color: #fff;
                    text-align: center;
                    margin-top: 100px;
                }

                /* Tabs Start */

                .ease {
                    -webkit-transition: all .5s;
                    -moz-transition: all .5s;
                        -o-transition: all .5s;
                            transition: all .5s;
                }

                .container {
                    width: 100%;
                    max-width: 1000px;
                    margin: 0 auto;
                }

                .tabs {
                    background: #fff;
                    position: relative;
                    margin-bottom: 50px;
                }

                .tabs > input,
                .tabs > span {
                    width: 20%;
                    height: 60px;
                    line-height: 60px;
                    position: absolute;
                    top: 0;
                }

                .tabs > input {
                    cursor: pointer;
                    filter: alpha(opacity=0);
                    opacity: 0;
                    position: absolute;
                    z-index: 99;
                }

                .tabs > span {
                    background: #f0f0f0;
                    text-align: center;
                    overflow: hidden;
                }

                .tabs > span i,
                .tabs > span {
                    -webkit-transition: all .5s;
                    -moz-transition: all .5s;
                        -o-transition: all .5s;
                            transition: all .5s;
                }

                .tabs > input:hover + span {
                    background: rgba(255,255,255,.1);
                }

                .tabs > input:checked + span {
                    background: #fff;
                }

                .tabs > input:checked + span,
                .tabs > input:hover + span {
                    color: #3498DB;
                }

                #tab-1, #tab-1 + span {
                    left: 0;
                }

                #tab-2, #tab-2 + span {
                    left: 20%;
                }

                #tab-3, #tab-3 + span {
                    left: 40%;
                }

                #tab-4, #tab-4 + span {
                    left: 60%;
                }

                #tab-5, #tab-5 + span {
                    left: 80%;
                }

                .tab-content {
                    padding: 80px 20px 20px;
                    width: 100%;
                    min-height: 340px;
                }

                .tab-content section {
                    width: 100%;
                    display: none;
                }

                .tab-content section h1 {
                    margin-top: 15px;
                    font-size: 100px;
                    font-weight: 100;
                    text-align: center;
                }

                #tab-1:checked ~ .tab-content #tab-item-1  {
                    display: block;
                }

                #tab-2:checked ~ .tab-content #tab-item-2  {
                    display: block;
                }

                #tab-3:checked ~ .tab-content #tab-item-3  {
                    display: block;
                }

                #tab-4:checked ~ .tab-content #tab-item-4  {
                    display: block;
                }

                #tab-5:checked ~ .tab-content #tab-item-5  {
                    display: block;
                }

                /* effect-1 */

                .effect-1 > input:checked + span {
                    background: #fff;
                }


                /* effect-2 */

                .effect-2 span i{
                    padding-right: 15px;
                }

                @media (max-width: 600px) {
                    .effect-2 span span {display: none;}
                    .effect-2 span i {padding: 0;}
                }

                /* effect-3 */

                .effect-3 .line{
                    background: #3498DB;
                    width: 20%;
                    height: 4px;
                    position: absolute;
                    top: 56px;
                }

                #tab-1:checked ~ .line {
                    left: 0;
                }

                #tab-2:checked ~ .line {
                    left: 20%;
                }

                #tab-3:checked ~ .line {
                    left: 40%;
                }

                #tab-4:checked ~ .line {
                    left: 60%;
                }

                #tab-5:checked ~ .line {
                    left: 80%;
                }


/* effect-4 */

            .effect-4 span i{
                font-size: 18px;
                display: block;
                position: absolute;
                left: 50%;
                top: 0;
                opacity: 0;
                transform: translateX(-50%);
            }

            .effect-4 span span{
                position: relative;
                top: 10px;
            }

            .effect-4 > input:checked + span i,
            .effect-4 > input:hover + span i {
                top: 20%;
                opacity: 1;
            }

            /* effect-5 */

            .effect-5 > input:checked + span i,
            .effect-5 > input:hover + span i {
                font-size: 25px;
            }
            .tampilkan{
                background-color: red;
                height: 30px;
                color: white;
                font-weight: bold;
                width: 142px;
                margin-top: 10px;
                border-radius: 5px;
            }
            </style>
    </head>
    <body>

    <div class="container">
            <center>
                <select  id="tahun_ajaran" style="width:14%; height:32px;margin-top: 55px" name="tahun_ajaran">
                        <option value="2021/2022 Genap">2021/2022 Genap</option>
                        <option value="2021/2022 Ganjil">2021/2022 Ganjil</option>
                </select>
                <div onclick="tahunAjaran()" class="tampilkan">
                    <p style="padding-top: 6px;cursor:pointer">Tampilkan</p>
                </div>
            </center>
		<div class="tabs effect-1" style="margin-top: 60px">
			<!-- tab-title -->
			<input type="radio" id="tab-1" name="tab-effect-1" checked="checked">
			<span>Daftar Matakuliah</span>

			<input type="radio" id="tab-2" name="tab-effect-1">
			<span>Matakuliah Luar Prodi</span>

			<!-- tab-content -->
			<div class="tab-content">
				<section id="tab-item-1">
                <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                   <div style="display:flex">
                   <select onchange="changeLengthData()" class="count-data" id="sel" style="width:10%" name="number" id="cars">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                    </select>
                    <input style="width:20%;margin-left: auto;" type="text" id="search" name="search" placeholder="Cari.">
                    </div>
                        <table id="customers">
                        <thead>
                        <tr>
                            <th>Kode Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Kode Matakuliah</th>
                            <th>Nama Matakuliah</th>
                            <th>SKS</th>
                        </tr>
                        </thead>
                        <tbody id="dataTable">
                                <?php echo fetch_top_five_data($connect); ?>
                        </tbody>
                    </table>
                    <div class="pagination" id="pg">
                    </div>
                    </div>
                </div>
            </div>
        </div>
				</section>
				<section id="tab-item-2">
					<h1>kosong</h1>
				</section>
				
			</div>
		</div>			
			
		
	</div>
    </body>
</html>

<script>
let search = null;
let dataSelect = 10;
let countData =  <?php echo count_all_data($connect); ?>;
let countPage = Math.ceil(countData/dataSelect)
let paginate = '';
let tmpPage = [];
for(let i=1; i<=countPage; i++){
        tmpPage.push(i)
    }
  



const fetchData = (search , dataSelect) => {
    let ajaxParams = {};

    function queryParams(params) {
        return Object.keys(params)
            .map(k => encodeURIComponent(k) + '=' + encodeURIComponent(params[k]))
            .join('&');
    }

        let params = {
            "searchQuery": search,
            "sortColumn":null,
            "sortDirection": null,
            "start": 0,
            "length": dataSelect,
            "datatable": 1
        };

        params = Object.assign({}, ajaxParams, params);

        let query = 'controller/fetch.php' + '?' + queryParams(params);
        fetch(query, {
            method: 'GET',
            credentials: "same-origin",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            }
        }).then(function (response) {
            return response.json();
        }).then(function (json) {
            $output = ``;
            for(i=0; i<json.data.length; i++){
                $output += `
                        <tr>
                            <td>${json.data[i][0]}</td>
                            <td>${json.data[i][1]}</td>
                            <td>${json.data[i][2]}</td>
                            <td>${json.data[i][3]}</td>
                            <td>${json.data[i][4]}</td>
                        </tr>
                        `;
            }
            document.getElementById("dataTable").innerHTML = $output
        })
        
        .catch(function (error) {
            console.error(error);
        });
}

    document.addEventListener('keyup', function (event) {
       
  
    search = event.target.value;
  
    dataSelect =  document.getElementById('sel').value;
    fetchData(search , dataSelect)
    if(search){
        document.getElementById('pg').style.display = 'none';
    }else{
        document.getElementById('pg').style.display = 'block';
    }
},false)

function changeLengthData(){
    paginate = '';
    dataSelect =    document.getElementById('sel').value;
    fetchData(search , dataSelect );
    countPage = Math.ceil(countData/dataSelect);
    tmpPage = [];
  
    for(let i=1; i<=countPage; i++){
        tmpPage.push(i)
    }
  
    for(let i=0; i<tmpPage.length; i++){
        paginate  += `
        <a href="#" onclick={pageinate(${tmpPage[i]-1})} id="move">${tmpPage[i]}</a>
        `;
    }
    if(tmpPage.length > 1){
        document.getElementById("pg").innerHTML = '';
        document.getElementById("pg").innerHTML = paginate;
        
    }else{
        document.getElementById("pg").innerHTML = '';
    }

}

document.getElementById("pg").innerHTML = '';
for(let i=0; i<tmpPage.length; i++){
    paginate  += `
        <a href="#" onclick={pageinate(${tmpPage[i]-1})} id="move">${tmpPage[i]}</a>
        `;
    }
if(tmpPage.length > 1){
    document.getElementById("pg").innerHTML = paginate;
}else{
    document.getElementById("pg").innerHTML = '';
}

function pageinate(id){
    let start = id*dataSelect;
    let end = (Number(dataSelect))+ (Number(start));
   
    function queryParams(params) {
        return Object.keys(params)
            .map(k => encodeURIComponent(k) + '=' + encodeURIComponent(params[k]))
            .join('&');
    }

    
        fetch('controller/fetch _all_data.php', {
            method: 'GET',
            credentials: "same-origin",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            }
        }).then(function (response) {
            return response.json();
        }).then(function (json) {
           const hasil =  json.data.slice(start, end)
            $output = ``;
            for(i=0; i<hasil.length; i++){
                $output += `
                        <tr>
                            <td>${hasil[i][0]}</td>
                            <td>${hasil[i][1]}</td>
                            <td>${hasil[i][2]}</td>
                            <td>${hasil[i][3]}</td>
                            <td>${hasil[i][4]}</td>
                        </tr>
                        `;
            }
            document.getElementById("dataTable").innerHTML = $output;
        })
        
        .catch(function (error) {
            console.error(error);
        });

        
}



</script>