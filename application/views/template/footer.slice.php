
					</div>
<!--                     </div> -->
					<!-- End Container -->
					<!-- Begin Page Footer-->
					<footer class="main-footer">
						<div class="row">
							<div class="col-12 text-center">
								<p class="text-gradient-02">&copy Copyright 2019 Property Operation</p>
							</div>
<!-- 							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
								<ul class="nav">
									<li class="nav-item">
										<a class="nav-link" href="documentation.html">Documentation</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="changelog.html">Changelog</a>
									</li>
								</ul>
							</div>
						</div> -->
					</footer>
					<!-- End Page Footer -->
					<a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
				</div>
			</div>
			<!-- End Page Content -->
		</div>
		<!-- Begin Vendor Js -->
		<!-- <script src="assets/vendors/js/base/jquery.min.js"></script> -->
        
		<script src="{{ base_url('assets/assets/vendors/js/base/core.min.js')}}"></script>
		<!-- End Vendor Js -->
		<!-- Begin Page Vendor Js -->
		<script src="{{ base_url('assets/assets/vendors/js/nicescroll/nicescroll.min.js')}}"></script>
		        <script src="{{ base_url('assets/assets/vendors/js/datatables/datatables.js')}}"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="{{ base_url('assets/assets/vendors/js/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ base_url('assets/assets/vendors/js/datatables/jszip.min.js')}}"></script>
        <script src="{{ base_url('assets/assets/vendors/js/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ base_url('assets/assets/vendors/js/datatables/pdfmake.min.js')}}"></script>
        <script src="{{ base_url('assets/assets/vendors/js/datatables/vfs_fonts.js')}}"></script>
        <script src="{{ base_url('assets/assets/vendors/js/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ base_url('assets/assets/vendors/js/app/app.min.js')}}"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="{{ base_url('assets/assets/js/components/tables/tables.js')}}"></script>

        <script type="text/javascript">
        function demoFromHTML() {
            var pdf = new jsPDF('p', 'pt', 'letter');
            // source can be HTML-formatted string, or a reference
            // to an actual DOM element from which the text will be scraped.
            source = $('#export1')[0];

            // we support special element handlers. Register them with jQuery-style 
            // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
            // There is no support for any other type of selectors 
            // (class, of compound) at this time.
            specialElementHandlers = {
                // element with id of "bypass" - jQuery style selector
                '#bypassme': function(element, renderer) {
                    // true = "handled elsewhere, bypass text extraction"
                    return true
                }
            };
            margins = {
                top: 80,
                bottom: 60,
                left: 40,
                width: 522
            };
            // all coords and widths are in jsPDF instance's declared units
            // 'inches' in this case
            pdf.fromHTML(
                    source, // HTML string or DOM elem ref.
                    margins.left, // x coord
                    margins.top, {// y coord
                        'width': margins.width, // max width of content on PDF
                        'elementHandlers': specialElementHandlers
                    },
            function(dispose) {
                // dispose: object with X, Y of the last line add to the PDF 
                //          this allow the insertion of new lines after html
                pdf.save('Test.pdf');
            }
            , margins);
        }
    </script>
		<!-- End Page Vendor Js -->
	</body>
</html>