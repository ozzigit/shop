$(function () {
    $("#datatables-dashboard-projects").DataTable({
        responsive: true,
        pageLength: 10,
        lengthChange: false,
        bFilter: false,
        autoWidth: false,
        order: [[3, "desc"]],
    });
});
