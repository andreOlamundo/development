function AppViewModel() {
    var NumeroLinhasPorPagina = 10;
    var self = this;
    self.Produtos = ko.observableArray([]);
     
    $.ajax({
        type: "GET",
        url: "/Home/index",
        dataType: "json",
        async: true,
        data: { 'linhasPorPagina': NumeroLinhasPorPagina, "pagina": 1 },
        success: function (data) {
            self.Produtos(data);
            Pagination(data[0].TotalPage, NumeroLinhasPorPagina);
        }
    });
  
    function Pagination(NumeroLinhasEncontradas, NumeroLinhasPorPagina) {
        $("#PaginationLink").html('');
        $("#PaginationLink").html('<ul id="pagination"></ul>');
         
        $('#pagination')
            .twbsPagination({
                totalPages: Math.ceil(NumeroLinhasEncontradas 
                / NumeroLinhasPorPagina),
                initiateStartPageClick: false,
                startPage: 1,
                visiblePages: 5,
                href: false,
                hrefVariable: '{{number}}',
                first: '««',
                prev: '«',
                next: '»',
                last: '»»',
                loop: false,
                paginationClass: 'pagination pagination-lg',
                nextClass: 'next',
                prevClass: 'prev',
                lastClass: 'last',
                firstClass: 'first',
                pageClass: 'page',
                activeClass: 'active',
                disabledClass: 'disabled',
                onPageClick: function (event, page) {
                    $.ajax({
                        type: 'GET',
                        url: "/Home/index",
                        dataType: "json",
                        async: true,
                        data: { 
                            'linhasPorPagina': NumeroLinhasPorPagina
                            , "pagina": page 
                        },
                        success: function (data) {
                            self.Produtos(data);
                        }
                    });
                },
            });
    };
};
var vm = new AppViewModel();
ko.applyBindings(vm);