
        var now = new Date();
        var year = now.getFullYear();
        var month = now.getMonth() + 1;
        var date = now.getDate();

       


        var data = [

      {date: '2022-12-01', value: '₹ 21,999/ night'},
      {date: '2022-12-02', value: '₹ 21,999/ night'},
      {date: '2022-12-03', value: '₹ 21,999/ night'},
      {date: '2022-12-04', value: '₹ 21,999/ night'},
      {date: '2022-12-05', value: '₹ 21,999/ night'},
      {date: '2022-12-06', value: '₹ 21,999/ night'},
      {date: '2022-12-07', value: '₹ 21,999/ night'},
      {date: '2022-12-08', value: '₹ 21,999/ night'},
      {date: '2022-12-09', value: '₹ 21,999/ night'},
      {date: '2022-12-10', value: '₹ 21,999/ night'},
      {date: '2022-12-11', value: '₹ 21,999/ night'},
      {date: '2022-12-12', value: '₹ 21,999/ night'},
      {date: '2022-12-13', value: '₹ 21,999/ night'},
      {date: '2022-12-14', value: '₹ 21,999/ night'},
      {date: '2022-12-15', value: '₹ 21,999/ night'},
      {date: '2022-12-16', value: '₹ 21,999/ night'},
      {date: '2022-12-17', value: '₹ 21,999/ night'},
      {date: '2022-12-18', value: '₹ 21,999/ night'},
      {date: '2022-12-19', value: '₹ 21,999/ night'},
      {date: '2022-12-20', value: '₹ 21,999/ night'},
      {date: '2022-12-21', value: '₹ 21,999/ night'},
      {date: '2022-12-22', value: '₹ 21,999/ night'},
      {date: '2022-12-23', value: '₹ 21,999/ night'},
      {date: '2022-12-24', value: '₹ 21,999/ night'},
      {date: '2022-12-25', value: '₹ 21,999/ night'},
      {date: '2022-12-26', value: '₹ 21,999/ night'},
      {date: '2022-12-27', value: '₹ 21,999/ night'},
      {date: '2022-12-28', value: '₹ 21,999/ night'},
      {date: '2022-12-29', value: '₹ 21,999/ night'},
      {date: '2022-12-30', value: '₹ 21,999/ night'},
      {date: '2022-12-31', value: '₹ 21,999/ night'},
      

      {date: '2023-01-01', value: '₹ 21,999/  night'},
      {date: '2023-01-02', value: '₹ 21,999/  night'},
      {date: '2023-01-03', value: '₹ 21,999/  night'},
      {date: '2023-01-04', value: '₹ 21,999/  night'},
      {date: '2023-01-05', value: '₹ 21,999/  night'},
      {date: '2023-01-06', value: '₹ 21,999/  night'},
      {date: '2023-01-07', value: '₹ 12,999/  night'},
      {date: '2023-01-08', value: '₹ 12,999/  night'},
      {date: '2023-01-09', value: '₹ 12,999/  night'},
      {date: '2023-01-10', value: '₹ 12,999/  night'},
      {date: '2023-01-11', value: '₹ 12,999/  night'},
      {date: '2023-01-15', value: '₹ 12,999/  night'},
      {date: '2023-01-13', value: '₹ 12,999/  night'},
      {date: '2023-01-14', value: '₹ 12,999/  night'},
      {date: '2023-01-15', value: '₹ 12,999/  night'},
      {date: '2023-01-16', value: '₹ 12,999/  night'},
      {date: '2023-01-17', value: '₹ 12,999/  night'},
      {date: '2023-01-18', value: '₹ 12,999/  night'},
      {date: '2023-01-19', value: '₹ 12,999/  night'},
      {date: '2023-01-20', value: '₹ 12,999/  night'},
      {date: '2023-01-21', value: '₹ 12,999/  night'},
      {date: '2023-01-22', value: '₹ 12,999/  night'},
      {date: '2023-01-23', value: '₹ 12,999/  night'},
      {date: '2023-01-24', value: '₹ 12,999/  night'},
      {date: '2023-01-25', value: '₹ 12,999/  night'},
      {date: '2023-01-26', value: '₹ 12,999/  night'},
      {date: '2023-01-27', value: '₹ 12,999/  night'},
      {date: '2023-01-28', value: '₹ 12,999/  night'},
      {date: '2023-01-29', value: '₹ 12,999/  night'},
      {date: '2023-01-30', value: '₹ 12,999/  night'},
      {date: '2023-01-31', value: '₹ 12,999/  night'},

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
    