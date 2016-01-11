 var order=1,order1=1,order2=1,order3=1;


        function sort_table(col) {
            var or;
          if(col==0)
            {
                order *=-1;
                or=order;
            }
          else if(col==1)
            {
                order1 *=-1;
                or=order1;
             }
          else if(col==2)
            {
                order2 *=-1;
                or=order2;
            }
            else if(col==3)
            {
                order3 *=-1;
                or=order3;
            }
            var rows = document.getElementById("people").rows;
                rlen = rows.length;
                var  arr =[] ;
                var i, j, cells, clen;
            for (i = 0; i < rlen; i++)
            {
                cells = rows[i].cells;
                console.log(cells);
                clen = cells.length;
                arr[i] = new Array();
                for (j = 0; j < clen; j++)
                {
                    arr[i][j] = cells[j].innerHTML;
                }
            }
            arr.sort(function (a, b)
            {
                  if (a[col] == b[col])
                         return 0;
                 else if(a[col] > b[col])
                      return or;
                 else
                     return  -1 * or;
             });
            for (i = 0; i < rlen; i++) {
                rows[i].innerHTML = "<td>" + arr[i].join("</td><td>") + "</td>";
            }
        }
