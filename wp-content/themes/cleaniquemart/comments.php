<?php
/**
 * The template for displaying comments
 *
 * @package CleaniqueMart
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="cm-comments-area">

	<!-- 2-Column Layout: Kiri = Daftar Komentar | Kanan = Form Komentar -->
	<div class="cm-comments-layout">

		<!-- KOLOM KIRI: Daftar Komentar -->
		<div class="cm-comments-left">
			<h3 class="cm-comments-title">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
				<span>Diskusi &amp; Tanggapan <?php if ( have_comments() ) { echo '(' . get_comments_number() . ')'; } ?></span>
			</h3>

			<?php if ( have_comments() ) : ?>
				<ol class="comment-list">
					<?php
					wp_list_comments( array(
						'style'       => 'ol',
						'short_ping'  => true,
						'avatar_size' => 44,
					) );
					?>
				</ol>

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
					<nav class="comment-navigation" role="navigation" style="display:flex;justify-content:space-between;margin-top:16px;">
						<div class="nav-previous"><?php previous_comments_link( '&larr; Komentar Lama' ); ?></div>
						<div class="nav-next"><?php next_comments_link( 'Komentar Baru &rarr;' ); ?></div>
					</nav>
				<?php endif; ?>

			<?php elseif ( comments_open() ) : ?>
				<div class="cm-no-comments">
					<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="1.8" style="margin:0 auto 12px;display:block;"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
					<h4 style="font-family:'Lexend',sans-serif;font-size:15px;font-weight:700;color:#0f172a;margin:0 0 6px;">Belum Ada Komentar</h4>
					<p style="font-size:13px;color:#64748b;margin:0;line-height:1.5;">Jadilah yang pertama memberikan tanggapan, ulasan, atau pertanyaan seputar artikel ini!</p>
				</div>
			<?php endif; ?>

			<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
				<p class="no-comments" style="color:#64748b;font-size:14px;text-align:center;padding:14px;background:#f1f5f9;border-radius:8px;">
					Kolom komentar pada artikel ini telah ditutup.
				</p>
			<?php endif; ?>
		</div>

		<!-- KOLOM KANAN: Form Komentar -->
		<div class="cm-comments-right">
			<?php
			$commenter = wp_get_current_commenter();
			$req       = get_option( 'require_name_email' );
			$aria_req  = ( $req ? " aria-required='true'" : '' );

			$fields = array(
				'author' => '<div class="comment-form-author">' .
					'<label for="author">' . esc_html__( 'Nama Lengkap', 'cleaniquemart' ) . ( $req ? ' <span class="required" style="color:#ef4444;">*</span>' : '' ) . '</label>' .
					'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="Tuliskan nama Anda" size="30"' . $aria_req . ' />' .
					'</div>',
				'email'  => '<div class="comment-form-email">' .
					'<label for="email">' . esc_html__( 'Alamat Email', 'cleaniquemart' ) . ( $req ? ' <span class="required" style="color:#ef4444;">*</span>' : '' ) . '</label>' .
					'<input id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" placeholder="nama@email.com" size="30"' . $aria_req . ' />' .
					'</div>',
			);

			comment_form( array(
				'title_reply'          => 'Tinggalkan Pertanyaan atau Komentar',
				'title_reply_to'       => 'Balas Komentar kepada %s',
				'cancel_reply_link'    => 'Batalkan Balasan',
				'label_submit'         => 'Kirim Komentar',
				'comment_notes_before' => '<p class="comment-notes">Alamat email Anda aman dan tidak akan dipublikasikan. Ruas bertanda <span class="required" style="color:#ef4444;">*</span> wajib diisi.</p>',
				'comment_field'        => '<div class="comment-form-comment">' .
					'<label for="comment">' . esc_html__( 'Isi Komentar / Pertanyaan', 'cleaniquemart' ) . ' <span class="required" style="color:#ef4444;">*</span></label>' .
					'<textarea id="comment" name="comment" cols="45" rows="7" placeholder="Tuliskan ulasan atau pertanyaan Anda secara jelas..." aria-required="true"></textarea>' .
					'</div>',
				'fields'               => $fields,
			) );
			?>
		</div>

	</div><!-- .cm-comments-layout -->

</div><!-- #comments -->
