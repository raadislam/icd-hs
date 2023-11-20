@extends('dashboard.main')
@section('content')
    <div class="content-wrapper p-4 container-fluid" style="min-height: 1113.69px; margin: 0 !important" bis_skin_checked="1">
        <section class="content">
            <div class="container-fluid" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-md-3" bis_skin_checked="1">
                        <a href="#" class="btn btn-primary btn-block mb-3">Reports Filter</a>
                        <div class="card p-3" bis_skin_checked="1">


                            <!-- Report Preview-->
                            <form id="preview-report" data-url="{{ route('jasperReport') }}">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="select2" multiple="multiple" name="categories"
                                        data-placeholder="Select a State" style="width: 100%;">

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Donors</label>
                                    <select class="select2" multiple="multiple" name="donors"
                                        data-placeholder="Select a State" style="width: 100%;">

                                        @foreach ($donors as $donor)
                                            <option value="{{ $donor->id }}">
                                                {{ $donor->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Format</label>
                                    <select class="form-control select2 select2-us" name="format" id="format" required>
                                        <option value="pdf">PDF</option>
                                        <option value="html">HTML</option>
                                        <option value="xls">Excel</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" id="preview-jasper-report" class="btn btn-info mt-3">
                                        <i class="fas fa-eye"></i>&nbsp;Preview
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-9" bis_skin_checked="1">
                        <div class="card card-primary card-outline" bis_skin_checked="1">
                            <div class="card-header" bis_skin_checked="1">
                                <h3 class="card-title">Report Viewer</h3>
                            </div>
                            <iframe access="allow-scripts" id="my-frame" style="min-height: 75vh">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
@section('script')
    <script>
        const previewReportFrom = document.querySelector("#preview-report");

        previewReportFrom.addEventListener("submit", previewReport, false);

        function previewReport(event) {
            event.preventDefault();

            let form = event.target;
            let url = form.getAttribute("data-url");
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
            let data = new FormData(form);


            fetch(url, {
                method: "POST",
                body: JSON.stringify({
                    jrxml: "books",
                    format: data.get("format"),
                    wants: 'url', //or redirection,content
                    params: [{
                            name: "categories",
                            type: "collection",
                            value: data.getAll('categories')
                        },
                        {
                            name: "donors",
                            type: "collection",
                            value: data.getAll('donors')
                        }
                    ],
                }),
                headers: {
                    "Content-type": "application/json; charset=UTF-8",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-Token": token
                }
            }).then(function(response) {
                return response.text();
            }).then(function(text) {
                document.getElementById('my-frame').src = text;
            });
        }
    </script>

    <script>
        var disabledResults = $(".select2-us");
        disabledResults.select2();
    </script>

    <script>
        $(function() {
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });

            // Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endsection
