<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="./admin.css">

    <title>home</title>
</head>

<body>
    <div class="container mt-5">
        @yield('admin_container')
    </div>

                    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        const right = document.querySelector('.col-right-sidebar')
        const navbar = document.querySelector('.col-navbar')
        const cover = document.querySelector('.screen-cover')

        const sidebar_items = document.querySelectorAll('.sidebar-item')

        function toggleNavbar() {
            navbar.classList.toggle('appear')
            cover.classList.toggle('d-none')
        }

        function toggleRightSidebar() {
            right.classList.toggle('appear')
            cover.classList.toggle('d-none')
        }

        cover.addEventListener('click', e => {
            cover.classList.add('d-none')
            right.classList.remove('appear')
            navbar.classList.remove('appear')
        })

        function toggleActive(e) {
            sidebar_items.forEach(function(v, k) {
                v.classList.remove('active')
            })
            e.closest('.sidebar-item').classList.add('active')
        }

        function increaseNumber(e) {
            let inp = e.closest('div').querySelector('.input-number')
            let current = inp.value

            inp.value = ++current
        }

        function decreaseNumber(e) {
            let inp = e.closest('div').querySelector('.input-number')
            let current = inp.value

            if (current !== "0") {
                inp.value = --current
            }
        }
    </script>
</body>

</html>