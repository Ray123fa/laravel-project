<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Gdrive Link to AutoDownload</title>

	<!-- Bootstrap CSS and JS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>

	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container" style="margin-top: 12.5%">
		<div class="row text-center mb-3 mb-md-5">
			<div class="col">
				<h2>Convert Your Gdrive Link</h2>
			</div>
		</div>

		<div class="row justify-content-center">
			<!-- Example -->
			<div class="col-lg-5 mb-4 me-lg-3">
				<p class="fw-bold mb-1">Example:</p>
				<ul class="list-group">
					<li class="list-group-item">
						<code class="text-black m-0 p-0 text-justify">
							https://drive.google.com/file/d/2CCJsMAd53ycgXJ_oD0PK8T8k4368XpUB/view?usp=drivesdk
						</code>
					</li>
					<li class="list-group-item">
						<code class="text-black m-0 p-0 text-justify">
							https://drive.google.com/file/d/2CCJsMAd53ycgXJ_oD0PK8T8k4368XpUB/view?usp=sharing
						</code>
					</li>
					<li class="list-group-item">
						<code class="text-black m-0 p-0 text-justify">
							https://drive.google.com/file/d/2CCJsMAd53ycgXJ_oD0PK8T8k4368XpUB/view
						</code>
					</li>
				</ul>
			</div>
			<!-- Example End -->

			<div class="col-lg-5 bg-light border rounded-3 p-4 mb-5 mt-2">
				<!-- Alert -->
				<div class="alert alert-warning d-flex align-items-center d-none response" role="alert">
					<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:" fill="currentColor"
						viewBox="0 0 16 16">
						<path
							d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
					</svg>
					<div id="response"></div>
				</div>
				<!-- Alert End -->

				<!-- Form -->
				<form class="mb-3" id="form" method="post">
					<label class="form-label small" for="oriLink">Original Link</label>
					<div class="input-group">
						<input type="text" name="url" class="form-control form-control-sm" id="oriLink" placeholder="Paste here" />
						<button type="submit" name="submit" class="btn btn-outline-success">Convert</button>
					</div>
				</form>
				<!-- Form End -->

				<!-- Result -->
				<div class="mb-3">
					<label class="form-label small" for="resLink">Result</label>
					<div class="input-group">
						<input type="text" class="form-control form-control-sm text-dark" id="resLink" readonly />
						<button class="btn btn-outline-success" id="btnCopyUrl">Copy</button>
						<button class="btn btn-outline-success" id="btnOpenUrl">Open</button>
					</div>
				</div>
				<!-- Result End -->
			</div>
		</div>
	</div>

	<!-- Form and Result Handling -->
	<script src="{{ asset('gdrive-download/gdrive.js') }}"></script>
</body>

</html>