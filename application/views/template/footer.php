<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Wisata Bahari 2022</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

<!-- google chart script -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- Page level plugins -->
<script src="<?= base_url('assets'); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets'); ?>/js/demo/datatables-demo.js"></script>

<!-- master budget chart -->
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Tahun 2021', 'Pagu', 'Serapan'],
            ['Fasilitasi Pengembangan Wisata Bahari', 50000000000, 25000000000],
            ['Pembangunan Desa Wisata Bahari', 100000000000, 50000000000],
            ['Peningkatan Kapasitas dan Pendampingan', 50000000000, 25000000000]
        ]);

        var options = {
            chart: {}
        };

        var chart = new google.charts.Bar(document.getElementById('master_budget_chart'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>

<!-- sub budget chart A-1 -->
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Anggaran', 'Serapan'],
            ['Pagu', 12500000000],
            ['Barang Operasional - Penanganan Pandemi Covid-19', 1388000000],
            ['Barang Persediaan - Penanganan Pandemi COVID 19', 1388000000],
            ['Bahan', 1388000000],
            ['Sewa', 1388000000],
            ['Jasa Profesi', 7],
            ['Jasa - Penanganan Pandemi COVID 19', 1388000000],
            ['perjalanan biasa', 1388000000],
            ['Perjalanan Dinas Dalam Kota', 1388000000],
            ['Perjalanan Dinas Paket Meeting Luar Kota', 1388000000],
            ['Modal Peralatan dan Mesin', 1388000000],
        ]);

        var options = {
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('sub_budget_chart_a_1'));
        chart.draw(data, options);
    }
</script>

<!-- sub budget chart A-2 -->
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Anggaran', 'Serapan'],
            ['Pagu', 12500000000],
            ['Bahan', 3125000000],
            ['Sewa', 3125000000],
            ['Jasa Lainnya', 3125000000],
            ['Perjalanan Biasa', 3125000000]
        ]);

        var options = {
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('sub_budget_chart_a_2'));
        chart.draw(data, options);
    }
</script>

<!-- sub budget chart B-1 -->
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Anggaran', 'Serapan'],
            ['Bahan', 1500000],
            ['Jasa Konsultan', 1000000],
            ['Jasa Profesi', 2000000],
            ['Perjalanan Biasa', 3000000],
            ['Perjalanan Dinas Dalam Kota', 4500000]
        ]);

        var options = {
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('sub_budget_chart_b_1'));
        chart.draw(data, options);
    }
</script>

<!-- sub budget chart B-2 -->
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Anggaran', 'Serapan'],
            ['Bahan', 1500000],
            ['Sewa', 1000000],
            ['Jasa Lainnya', 2000000],
            ['Perjalanan Biasa', 3000000]
        ]);

        var options = {
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('sub_budget_chart_b_2'));
        chart.draw(data, options);
    }
</script>

<!-- sub budget chart B-3 -->
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Anggaran', 'Serapan'],
            ['Bahan', 1500000],
            ['Sewa', 1000000],
            ['Jasa Lainnya', 2000000],
            ['Perjalanan Biasa', 3000000]
        ]);

        var options = {
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('sub_budget_chart_b_3'));
        chart.draw(data, options);
    }
</script>
<!-- sub budget chart C-1 -->
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Anggaran', 'Serapan'],
            ['Bahan', 1500000],
            ['Jasa Profesi', 2000000],
            ['Perjalanan Biasa', 2500000],
            ['Perjalanan Dinas Paket Meeting Dalam Kota', 3000000],
            ['Perjalanan Dinas Paket Meeting Luar Kota', 4500000]
        ]);

        var options = {
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('sub_budget_chart_c_1'));
        chart.draw(data, options);
    }
</script>

<!-- sub budget chart C-2 -->
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Anggaran', 'Serapan'],
            ['Bahan', 1500000],
            ['Jasa Lainnya', 2000000],
            ['Sewa', 1000000],
            ['Jasa Profesi', 1000000],
            ['Perjalanan Biasa', 3000000],
            ['Perjalanan Dinas Paket Meeting Dalam Kota', 3000000],
            ['Perjalanan Dinas Paket Meeting Luar Kota', 4500000]
        ]);

        var options = {
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('sub_budget_chart_c_2'));
        chart.draw(data, options);
    }
</script>
</body>

</html>