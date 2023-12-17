@extends('dashboard.main')

@section('content')
    @php
        $weekdays = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
    @endphp
    <style>
        .grid-table {
            display: grid;
            grid-template-columns: 20% 80%;
            width: 100%;
            border: 1px solid lightgrey;
            padding: 15px;
            margin: 25px;
        }

        .timeslot {
            display: inline;
            background-color: #ed2939;
            color: #fff;
            padding: 0.5em 0.7em 0.5em 0.7em;
            margin-right: 0.5em;
            cursor: pointer;
        }

        .self-deletable {
            padding: 10px;
            cursor: pointer;
        }
    </style>
    <div>
        <div id="slot-modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" bis_skin_checked="1">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" bis_skin_checked="1">
                        <div class="bootstrap-timepicker" bis_skin_checked="1">
                            <div class="form-group" bis_skin_checked="1">
                                <div class="input-group date" id="slot" data-target-input="nearest"
                                    bis_skin_checked="1">
                                    <input name="slot" type="text" class="form-control datetimepicker-input"
                                        data-target="#slot">
                                    <div class="input-group-append" data-target="#slot" data-toggle="datetimepicker"
                                        bis_skin_checked="1">
                                        <div class="input-group-text" bis_skin_checked="1">
                                            <i class="far fa-clock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between" bis_skin_checked="1">
                        <button id="slot-add" type="button" class="btn btn-default">ADD</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="planner" data- class="border border-primary grid-table">
            @foreach ($weekdays as $weekday)
                <div class="py-3">
                    <span class="text-capitalize">
                        {{ $weekday }}
                    </span>
                </div>
                <div style="display: flex; align-items: center">
                    <div id='slots'>Time Slot: </div>
                    <button type="button" class="mx-1 btn btn-primary add-slot" data-target=".bd-example-modal-lg">
                        +
                    </button>
                </div>
            @endforeach
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {

            var slotTarget = null;

            var $slotModal = $('#slot-modal').modal({
                show: false
            }).on('show.bs.modal', function(event) {
                slotTarget = $(event.relatedTarget);
                console.log(slotTarget);

                $('#slot-add').on('click', function() {
                    var value = $('input.datetimepicker-input').val();
                    var slotElement =
                        `<span class='timeslot'>
                        ${value} &nbsp;&#9747;
                        </span>`;

                    var slotsElement = slotTarget.siblings('#slots')[0];

                    $(slotsElement).append(slotElement);

                    $slotModal.modal('hide');
                });
            }).on('hide.bs.modal', function(event) {
                $('#slot-add').off('click');
            });

            $('.add-slot').click(function(e) {
                $slotModal.modal('show', $(e.target));
            });

        });
    </script>

    <script>
        $(document).on("click", '.timeslot', function(e) {
            $(e.target).remove();
        });
    </script>


    <script>
        $('#slot').datetimepicker({
            format: 'LT'
        });
    </script>
@endpush


{{-- @push('styles')
    <style type="text/css">
        .Table {
            display: table;
        }

        .Title {
            display: table-caption;
            text-align: center;
            font-weight: bold;
            font-size: larger;
        }

        .Heading {
            display: table-row;
            font-weight: bold;
            text-align: center;
        }

        .Row {
            display: table-row;
        }

        .Cell {
            display: table-cell;
            border: solid;
            border-width: thin;
            padding-left: 5px;
            padding-right: 5px;
        }
    </style>
@endpush --}}
