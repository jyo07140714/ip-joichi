<html lang="ja">
    <head>
        <title>items.pdf</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            body {
                color: #444;
                text-shadow: 0 1px 0 #fff;
            }

            strong {
                font-weight: bold; 
            }

            table {
                background: #f5f5f5;
                border-collapse: separate;
                box-shadow: inset 0 1px 0 #fff;
                font-size: 12px;
                line-height: 24px;
                margin: 30px auto;
                text-align: left;
                width: 800px;
            } 

            th {
                border-left: 1px solid #555;
                border-right: 1px solid #777;
                border-top: 1px solid #555;
                border-bottom: 1px solid #333;
                box-shadow: inset 0 1px 0 #999;
                color: #fff;
                font-weight: bold;
                padding: 10px 15px;
                position: relative;
                text-shadow: 0 1px 0 #000;  
            }

            th:after {
                content: '';
                display: block;
                height: 25%;
                left: 0;
                margin: 1px 0 0 0;
                position: absolute;
                top: 25%;
                width: 100%;
            }

            th:first-child {
            border-left: 1px solid #777;  
            box-shadow: inset 1px 1px 0 #999;
            }

            th:last-child {
            box-shadow: inset -1px 1px 0 #999;
            }

            td {
            border-right: 1px solid #fff;
            border-left: 1px solid #e8e8e8;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #e8e8e8;
            padding: 10px 15px;
            position: relative;
            transition: all 300ms;
            }

            td:first-child {
                box-shadow: inset 1px 0 0 #fff;
            } 

            td:last-child {
                border-right: 1px solid #e8e8e8;
                box-shadow: inset -1px 0 0 #fff;
            } 

            tr:last-of-type td {
                box-shadow: inset 0 -1px 0 #fff; 
            }

            tr:last-of-type td:first-child {
                box-shadow: inset 1px -1px 0 #fff;
            } 

            tr:last-of-type td:last-child {
                box-shadow: inset -1px -1px 0 #fff;
            } 

            tbody:hover td {
                color: transparent;
                text-shadow: 0 0 3px #aaa;
            }

            tbody:hover tr:hover td {
                color: #444;
                text-shadow: 0 1px 0 #fff;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>type</th>
                    <th>detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td class="text-center">{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td class="text-center">{{$item->type}}</td>
                        <td>{{$item->detail}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>