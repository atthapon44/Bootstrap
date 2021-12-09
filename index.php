<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<style>
    .bg1 {
        background-color: red;
    }

    .bg2 {
        background-color: green;
    }

    .bg3 {
        background-color: blue;
        width: 90px;
        height: 1000px;
        float: left;
    }

    .bg4 {
        background-color: darkkhaki;
    }
</style>

<body>
    <div class="container">
    <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic.thairath.co.th%2Fmedia%2FdFQROr7oWzulq5FZWgs0vW0XsqogKnZCqWUKSzlokBa7s1x9b3Tl8ELuZ6VkiBrSSDP.jpg&imgrefurl=https%3A%2F%2Fwww.thairath.co.th%2Fnews%2Fforeign%2F1099719&tbnid=uh2C80FHnMrkYM&vet=12ahUKEwi0rZyimdf0AhU1t2MGHSFsA7UQMygCegUIARC9AQ..i&docid=6LUb6_YMTO5IvM&w=1000&h=563&itg=1&q=%E0%B9%80%E0%B8%AA%E0%B8%B7%E0%B8%AD%E0%B9%82%E0%B8%84%E0%B8%A3%E0%B9%88%E0%B8%87&ved=2ahUKEwi0rZyimdf0AhU1t2MGHSFsA7UQMygCegUIARC9AQ"
    class="img-fluid" alt="..." width="90%">
    <div class="container">
    <div class="col-12 bg3">[Float:left]</div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 20rem;">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.77kaoded.com%2Fnews%2Fprimwut%2F1835618&psig=AOvVaw248AvGo1UEaeAZ4Aea1w0P&ust=1639155782023000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJD7k62Z1_QCFQAAAAAdAAAAABAZ" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">เสือเป็นสัตว์ที่มีชีวิตสันโดษ ยกเว้นแม่เสือที่มีลูกอ่อน แต่เสือแต่ละตัวจะมีอาณาเขตไม่ไกลกันนัก เสือโคร่งบางตัวอาจมีพฤติกรรมเข้าสังคม เช่น แบ่งปันเหยื่อกันกิน</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 20rem;">
                    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fhilight.kapook.com%2Fview%2F204008&psig=AOvVaw248AvGo1UEaeAZ4Aea1w0P&ust=1639155782023000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJD7k62Z1_QCFQAAAAAdAAAAABAf" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">เสือโคร่งจะหลบซ่อนตัวอยู่ในถ้ำ โพรงไม้ และในบริเวณที่มีต้นไม้หนาแน่น ส่วนใหญ่จะออกมาในตอนกลางคืน แต่เสือไซบีเรียจะออกมาในช่วงกลางวันของฤดูหนาว</p>
                    </div>
                </div>
            </div>
            
            <div class="col-9">
                <button id="btnBack"> back </button>

                <div id="main">
                    <table  class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                        </thead>
                        <tbody id="tblPost">
                        </tbody>
                    </table>
                </div>

                <div id="detail">
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>UserID</th>
                            </tr>
                        </thead>
                        <tbody id="tblDetails">
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-12 bg1">
                <p>6312080</p>
                <p>นายอัฐพล อาจวิชัย</p>
            </div>
        </div>
    </div>
</body>
<script>
    function showDetails(id) {
        $("#main").hide();
        $("#detail").show();

        // console.log(id);
        var url = "https://jsonplaceholder.typicode.com/posts/" + id

        $.getJSON(url)
            .done((data) => {
                console.log(data);
                var line = "<tr id='detailROW'";
                line += "><td>" + data.id + "</td>"
                line += "<td><b>" + data.title + "</b><br/>"
                line += data.body + "</td>"
                line += "<td>" + data.userId + "</td>"
                line += "</tr>";
                $("#tblDetails").append(line);
            })
            .fail((xhr, err, status) => {

            })


    }

    function LoadPosts() {
        var url = "https://jsonplaceholder.typicode.com/posts"
        var i = 0;
        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                    // console.log(item);
                    i++;
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>"
                    line += "<td><b>" + item.title + "</b><br/>"
                    line += item.body + "</td>"
                    line += "<td><button onClick='showDetails(" + item.id + ");'>Link</button></td>"
                    line += "</tr>";
                    $("#tblPost").append(line);
                    if (i == 10) {
                        loadPost().stop();
                    };
                });
                $("#main").show();
            })
            .fail((xhr, err, status) => {

            })
    }

    $(() => {
        LoadPosts();
        $("#detail").hide();
        $("#btnBack").click(() => {
            $("#main").show();
            $("#detail").hide();
            $("#detailROW").remove();
        });
    })
</script>

</html>
