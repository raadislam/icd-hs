{{-- <div x-data>
    <template x-if="$store.slotModal.show">
        <div>
            <div class="bootstrap-timepicker" bis_skin_checked="1">
                <div class="form-group" bis_skin_checked="1">
                    <div class="input-group date" id="slot" data-target-input="nearest" bis_skin_checked="1">
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
            <button @click="$store.slotModal.toggle()" type="button" class="mx-1 btn btn-primary add-slot"
                data-target=".bd-example-modal-lg">
                X
            </button>
        </div>
    </template>
</div> --}}

<div xdata>
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
                                    <input name="slot" type="text"
                                        class="form-control datetimepicker-input" data-target="#slot">
                                    <div class="input-group-append" data-target="#slot"
                                        data-toggle="datetimepicker" bis_skin_checked="1">
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
</div>


<div x-data ="schedules">
    <div class="border border-secondary grid-table" x-data="{ weekdays: { 0: 'sunday', 1: 'monday', 2: 'tuesday', 3: 'wednesday', 4: 'thursday', 5: 'friday', 6: 'saturday' } }">

        <template x-for="[key, value] of Object.entries(weekdays)">
            <div style="display: flex; gap: 1em">
                <div class="py-3">
                    <span style="font-weight: bold" x-text="value" class="text-capitalize" /> :
                </div>
                <div style="display: flex; align-items: center">
                    <div id='slots'>
                        Time Slot:
                        <template x-if="schedules[key] !== undefined">
                            <template x-for="schedule in schedules[key]" x-init="console.log(schedules[key].slot)">
                                <span x-text="schedule.slot" class='timeslot'>
                                </span>
                            </template>
                        </template>
                    </div>
                    <button @click="$store.slotModal.display(key)" type="button" class="mx-1 btn btn-primary add-slot"
                        data-target=".bd-example-modal-lg">
                        +
                    </button>
                </div>
            </div>
        </template>

    </div>
</div>



@push('scripts')
    <script>
         var $slotModal = $('#slot-modal').modal({
                show: true
            })

        document.addEventListener('alpine:init', () => {
            Alpine.store('slotModal', {
                show: true,
                target: null,
                display: false,

                toggle() {
                    this.show = !this.show
                },
                setTarget(target) {
                    this.target = target
                },
                display(display) {
                    this.show = !this.show
                    $slotModal.modal('show');                 
                }
            });

            Alpine.data('schedules', () => ({
                schedules: {},

                init() {
                    this.schedules = {!! $schedules !!};
                }
            }));

        })
    </script>
    
    {{-- <script>
        $(document).ready(function() {
            var slotTarget = null;
            var $slotModal = $('#slot-modal').modal({
                show: false
            }).on('show.bs.modal', function(event) {
                slotTarget = $(event.relatedTarget);

                $('#slot-add').on('click', function(e) {

                    $('#schedule-modal').modal('hide')

                    let route = "{{ route('dashboard-therapy-schedule.store') }}";
                    let token = "{{ csrf_token() }}";

                    var value = $('input.datetimepicker-input').val();
                    var therapist = $('#therapist').val();
                    var therapyId = $('#therapy').val();
                    var weekday = $(slotTarget).attr('data-id');


                    $.ajax({
                        url: route,
                        type: 'POST',
                        data: {
                            _token: token,
                            therapist_id: therapist,
                            therapy_id: therapyId,
                            weekday: weekday,
                            slot: value,
                        },
                        success: function(response) {
                            console.log(response)
                        },
                        error: function(xhr) {
                            console.log(xhr)
                        }
                    });


                    var slotElement = `<span class='timeslot'> ${value} &nbsp;&#9747;</span>`;
                    var slotsElement = slotTarget.siblings('#slots')[0];

                    $(slotsElement).append(slotElement);
                    $slotModal.modal('hide');
                    $('#schedule-modal').modal('show')
                });

            }).on('hide.bs.modal', function(event) {
                $('#slot-add').off('click');
            });

            $('.add-slot').click(function(e) {
                $slotModal.modal('show', $(e.target));
                $('#schedule-modal').modal('hide')
            });

            $(document).on('click', '#schedule-table-modal-btn', function(e) {
                var $scheduleModal = $('#schedule-modal').modal({
                    show: true
                })

                let route = "{{ route('getschedule') }}";
                let token = "{{ csrf_token() }}";

                var therapist = $('#therapist').val();
                var therapyId = $('#therapy').val();
                console.log(therapist)

                $.ajax({
                    url: route,
                    type: 'GET',
                    data: {
                        _token: token,
                        therapist_id: therapist,
                        therapy_id: therapyId,
                    },
                    success: function(response) {
                        $('.modal-body').val(response)
                        console.log(response)
                    },
                    error: function(xhr) {
                        console.log(xhr)
                    }
                });

            })
        });
    </script> --}}



    <script>
        $(document).on("click", '.timeslot', function(e) {
            var id = $(e.target).attr("data-id");
            let route = "{{ route('dashboard-therapy-schedule.destroy', ':dashboard_therapy_schedule') }}";
            route = route.replace(':dashboard_therapy_schedule', id)

            $.ajax({
                url: route,
                method: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response)
                },
                error: function(xhr) {
                    //Do Something to handle error
                }
            });

            $(e.target).remove();
        });
    </script>




<script>
    $('#slot').datetimepicker({
        format: 'LT'
    });
</script>









































    {{-- <script>
        $(document).ready(function() {
            var slotTarget = null;
            var $slotModal = $('#slot-modal').modal({
                show: false
            }).on('show.bs.modal', function(event) {
                slotTarget = $(event.relatedTarget);
                console.log(slotTarget)

                $('#slot-add').on('click', function(e) {

                    $('#schedule-modal').modal('hide')

                    let route = "{{ route('dashboard-therapy-schedule.store') }}";
                    let token = "{{ csrf_token() }}";

                    var value = $('input.datetimepicker-input').val();
                    var therapist = $('#therapist').val();
                    var therapyId = $('#therapy').val();
                    var weekday = $(slotTarget).attr('data-id');

                    $.ajax({
                        url: route,
                        type: 'POST',
                        data: {
                            _token: token,
                            therapist_id: 1,
                            therapy_id: 1,
                            weekday: weekday,
                            slot: value,
                        },
                        success: function(response) {
                            console.log(response)
                        },
                        error: function(xhr) {
                            console.log(xhr)
                        }
                    });


                    var slotElement = `<span class='timeslot'> ${value} &nbsp;&#9747;</span>`;
                    var slotsElement = slotTarget.siblings('#slots')[0];

                    $(slotsElement).append(slotElement);
                    $slotModal.modal('hide');
                    $('#schedule-modal').modal('show')
                });

            }).on('hide.bs.modal', function(event) {
                $('#slot-add').off('click');
            });

            $('.add-slot').click(function(e) {
                $slotModal.modal('show', $(e.target));
                $('#schedule-modal').modal('hide')
            });

            $(document).on('click', '#schedule-table-modal-btn', function(e) {
                var $scheduleModal = $('#schedule-modal').modal({
                    show: true
                })

                let route = "{{ route('getschedule') }}";
                let token = "{{ csrf_token() }}";

                var therapist = $('#therapist').val();
                var therapyId = $('#therapy').val();
                console.log(therapist)

                $.ajax({
                    url: route,
                    type: 'GET',
                    data: {
                        _token: token,
                        therapist_id: therapist,
                        therapy_id: therapyId,
                    },
                    success: function(response) {
                        $('.modal-body').val(response)
                        console.log(response)
                    },
                    error: function(xhr) {
                        console.log(xhr)
                    }
                });

            })
        });
    </script>
    <script>
        $(document).on("click", '.timeslot', function(e) {
            var id = $(e.target).attr("data-id");
            let route = "{{ route('dashboard-therapy-schedule.destroy', ':dashboard_therapy_schedule') }}";
            route = route.replace(':dashboard_therapy_schedule', id)

            $.ajax({
                url: route,
                method: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response)
                },
                error: function(xhr) {
                    //Do Something to handle error
                }
            });

            $(e.target).remove();
        });
    </script> --}}

    <script></script>
@endpush

@push('styles')
    <style>
        .grid-table {
            display: grid;
            grid-template-columns: 50% 50%;
            width: 100%;
            border: 1px solid lightgrey;
            padding: 15px;
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
@endpush
