@extends('crudbooster::admin_template')

@section('content')
<style>
  .slug-widget {
    display: flex;
    justify-content: flex-start;
    align-items: center;
  }
  .slug {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .url-wrapper {
    display: inline-flex;
    align-items: center;
    height: 28px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    background: #fff !important;
  }

</style>
<link href="{{ asset('vendor/crudbooster/assets/summernote/summernote.css') }}">
<script src="{{ asset('vendor/crudbooster/assets/summernote/summernote.min.js') }}"></script>

<script type="text/javascript">
	 $(function () {
	   $('#content').summernote();
	 });
</script>

<div class="panel panel-default" id="root">
	<div class="panel-heading">
		Add Form
	</div>

	<div class="panel-body">
		<form action="{{ CRUDBooster::mainpath('add-save') }}" method="post">
			
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" name="title" v-model="input" class="form-control" required>
			</div>

    <div class="url-wrapper wrapper">
      <span class="root-url fa fa-link"> http://www.example.com/blog/</span>
      <span class="slug" v-text="slug"></span>
    </div>

			<div class="form-group">
				<label for="">Content</label>
				<textarea  id="content" name="content" class="form-control"></textarea>
			</div>


			<div class="panel-footer">
				<input type="submit" value="Save" class="btn btn-info">
			</div>

		</form>
	</div>

</div>

<script type="text/javascript">
  const app = new Vue({
  el: '#root',
 
  data: {
    input: '',
  },
 
  computed: {
    slug: function () {
        return this.slugify(this.input);
    },
  },
 
  methods: {
 
    slugify (text, ampersand = 'and') {
      const a = 'àáäâèéëêìíïîòóöôùúüûñçßÿỳýœæŕśńṕẃǵǹḿǘẍźḧ'
      const b = 'aaaaeeeeiiiioooouuuuncsyyyoarsnpwgnmuxzh'
      const p = new RegExp(a.split('').join('|'), 'g')
 
      return text.toString().toLowerCase()
        .replace(/[\s_]+/g, '-')
        .replace(p, c =>
          b.charAt(a.indexOf(c)))
        .replace(/&/g, `-${ampersand}-`)
        .replace(/[^\w-]+/g, '')
        .replace(/--+/g, '-')
        .replace(/^-+|-+$/g, '')
    }
  },

})
 
</script>


@endsection

<link href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}"></script>