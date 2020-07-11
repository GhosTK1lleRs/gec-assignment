<!-- Modal -->
<div class="modal fade" id="reviewBoxMordal" tabindex="-1" role="dialog" aria-labelledby="reviewBoxMordalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header px-2 py-2">
                <h5 class="modal-title" id="reviewBoxMordalLabel">Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-0 py-0">
                <form>
                    <div class="color-orange-bg">
                        <div class="row">
                            <div class="col-12 col-sm-3 text-nowrap text-center text-sm-left my-3">
                                @php $rating = 4; @endphp

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x text-light"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x text-light"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="col col-12 col-sm-9 text-center text-sm-left my-3">
                                <label class="text-light mt-1">4 of 5</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="validationTextarea" placeholder="Write a review" style="height: 200px"></textarea>
                    </div>
                </form>
                <div class="text-center mb-3">
                    <button type="button" class="btn btn-wide color-orange-bg text-light">Review</button>
                </div>
            </div>
        </div>
    </div>
</div>
