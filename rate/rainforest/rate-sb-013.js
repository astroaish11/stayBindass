
        var now = new Date();
        var year = now.getFullYear();
        var month = now.getMonth() + 1;
        var date = now.getDate();

       


        var data = [

      {date: '2022-11-01', value: '₹ 1,91,999/ night'},
      {date: '2022-11-02', value: '₹ 1,91,999/ night'},
      {date: '2022-11-03', value: '₹ 1,91,999/ night'},
      {date: '2022-11-04', value: '₹ 1,91,999/ night'},
      {date: '2022-11-05', value: '₹ 1,91,999/ night'},
      {date: '2022-11-06', value: '₹ 1,91,999/ night'},
      {date: '2022-11-07', value: '₹ 1,91,999/ night'},
      {date: '2022-11-08', value: '₹ 1,91,999/ night'},
      {date: '2022-11-09', value: '₹ 1,91,999/ night'},
      {date: '2022-11-10', value: '₹ 1,91,999/ night'},
      {date: '2022-11-11', value: '₹ 1,91,999/ night'},
      {date: '2022-11-12', value: '₹ 1,91,999/ night'},
      {date: '2022-11-13', value: '₹ 1,91,999/ night'},
      {date: '2022-11-14', value: '₹ 1,91,999/ night'},
      {date: '2022-11-15', value: '₹ 1,91,999/ night'},
      {date: '2022-11-16', value: '₹ 1,91,999/ night'},
      {date: '2022-11-17', value: '₹ 1,91,999/ night'},
      {date: '2022-11-18', value: '₹ 1,91,999/ night'},
      {date: '2022-11-19', value: '₹ 1,91,999/ night'},
      {date: '2022-11-20', value: '₹ 1,91,999/ night'},
      
      {date: '2022-11-21', value: '₹ 2,33,999/ night'},
      {date: '2022-11-22', value: '₹ 2,33,999/ night'},
      {date: '2022-11-23', value: '₹ 2,33,999/ night'},
      {date: '2022-11-24', value: '₹ 2,33,999/ night'},
      {date: '2022-11-25', value: '₹ 2,33,999/ night'},
      {date: '2022-11-26', value: '₹ 2,33,999/ night'},
      {date: '2022-11-27', value: '₹ 2,33,999/ night'},
      {date: '2022-11-28', value: '₹ 2,33,999/ night'},
      {date: '2022-11-29', value: '₹ 2,33,999/ night'},
      {date: '2022-11-30', value: '₹ 2,33,999/ night'},

/*Dec 1st to 19th*/
      {date: '2022-12-01', value: '₹ 2,75,999/ night'},
      {date: '2022-12-02', value: '₹ 2,75,999/ night'},
      {date: '2022-12-03', value: '₹ 2,75,999/ night'},
      {date: '2022-12-04', value: '₹ 2,75,999/ night'},
      {date: '2022-12-05', value: '₹ 2,75,999/ night'},
      {date: '2022-12-06', value: '₹ 2,75,999/ night'},
      {date: '2022-12-07', value: '₹ 2,75,999/ night'},
      {date: '2022-12-08', value: '₹ 2,75,999/ night'},
      {date: '2022-12-09', value: '₹ 2,75,999/ night'},
      {date: '2022-12-10', value: '₹ 2,75,999/ night'},
      {date: '2022-12-11', value: '₹ 2,75,999/ night'},
      {date: '2022-12-12', value: '₹ 2,75,999/ night'},
      {date: '2022-12-13', value: '₹ 2,75,999/ night'},
      {date: '2022-12-14', value: '₹ 2,75,999/ night'},
      {date: '2022-12-15', value: '₹ 2,75,999/ night'},
      {date: '2022-12-16', value: '₹ 2,75,999/ night'},
      {date: '2022-12-17', value: '₹ 2,75,999/ night'},
      {date: '2022-12-18', value: '₹ 2,75,999/ night'},
      {date: '2022-12-19', value: '₹ 2,75,999/ night'},

      /*Dec 20th to 23rd*/
      {date: '2022-12-20', value: '₹ 3,11,999/ night'},
      {date: '2022-12-21', value: '₹ 3,11,999/ night'},
      {date: '2022-12-22', value: '₹ 3,11,999/ night'},
      {date: '2022-12-23', value: '₹ 3,11,999/ night'},
      {date: '2022-12-24', value: '₹ 3,11,999/ night'},

      /*Dec 24th to 2nd Jan*/
      {date: '2022-12-25', value: '₹ 4,49,999/ night'},
      {date: '2022-12-26', value: '₹ 4,49,999/ night'},
      {date: '2022-12-27', value: '₹ 4,49,999/ night'},
      {date: '2022-12-28', value: '₹ 4,49,999/ night'},
      {date: '2022-12-29', value: '₹ 4,49,999/ night'},
      {date: '2022-12-30', value: '₹ 4,49,999/ night'},
      {date: '2022-12-31', value: '₹ 4,49,999/ night'},
      {date: '2023-01-01', value: '₹ 4,49,999/ night'},
      {date: '2023-01-02', value: '₹ 4,49,999/ night'},

        ];



        // inline
        var $ca = $('#one').calendar({
            // view: 'month',
            width: 330,
            height: 320,
            // startWeek: 0,
            // selectedRang: [new Date(), null],
            data: data,
            monthArray: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            date: new Date(/*2019, 00, 20*/),
            onSelected: function (view, date, data) {
                console.log('view:' + view)
                console.log('date:' + date)
                console.log('data:' + (data || '无'));
            },
            viewChange: function (view, y, m) {
                console.log(view, y, m)

            }
        });

        // picker
        $('#two').calendar({
            trigger: '#dt',
            // offset: [0, 1],
            zIndex: 999,
            data: data,
            onSelected: function (view, date, data) {
                console.log('event: onSelected')
            },
            onClose: function (view, date, data) {
                console.log('event: onClose')
                console.log('view:' + view)
                console.log('date:' + date)
                console.log('data:' + (data || '无'));
            }
        });

        // Dynamic elements
        var $demo = $('#demo');
        var UID = 1;
        $('#add').click(function () {
            $demo.append('<input id="input-' + UID + '"><div id="ca-' + UID + '"></div>');
            $('#ca-' + UID).calendar({
                trigger: '#input-' + UID++
            })
        })
    