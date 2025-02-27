
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
    <h1>This is About View</h1>
    <a href="home">Home</a>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
               
                <tbody>
                    @for($i = 1; $i<=10;$i++)
                    <tr >
                        <td>{{13}}</td>
                        <td>{{'x'}}</td>
                        <td>{{$i}}</td>
                        <td>{{'='}}</td>
                        <td>{{$i*13}}</td>
                    </tr>
                   
                </tbody>
                @endfor
            </table>
        </div>
        
    </body>
</html>
