<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel">Update Student data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <form wire:submit='updatestudent'>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label" id="name">Student Name</label>
                    <input wire:model='name' class="form-control" type="text">
                    @error('name')
                        <span class="text-danger"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" id="admission_no">Student Admission no.</label>
                    <input wire:model='admission_no' class="form-control" type="text">
                    @error('admission_no')
                        <span class="text-danger"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" id="department">Student Department</label>
                    <input wire:model='department' class="form-control" type="text">
                    @error('department')
                        <span class="text-danger"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" id="batch_no">Student Batch no.</label>
                    <input wire:model='batch_no' class="form-control" type="integer">
                    @error('batch_no')
                        <span class="text-danger"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" id="biometric">Student Biometric</label>
                    <input  wire:model='biometric' class="form-control" type="text">
                    @error('biometric')
                        <span class="text-danger"><i>{{$message}}</i></span>
                    @enderror
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Update</button>
            </div>
        </form>
      </div>
    </div>
  </div>
