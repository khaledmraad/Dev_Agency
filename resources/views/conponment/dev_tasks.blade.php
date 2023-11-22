<div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading{{ $loop->index }}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{ $loop->index }}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{ $loop->index }}">
                {{ $task->project_name }}
                </button>
            </h2>
            <div id="panelsStayOpen-collapse{{ $loop->index }}" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading{{ $loop->index }}">
                <div class="accordion-body">
                    <strong>{{ $task->topic }}.</strong><br>{{ $task->task }}
                    <p style="color: gray;">{{ $task->sender }} <br> {{ $task->created_at }}</p>
                    <button type="button" class="btn btn-success">Done</button>
                    <button type="button" class="btn btn-warning mx-2">Still</button>
                </div>
            </div>
        </div>