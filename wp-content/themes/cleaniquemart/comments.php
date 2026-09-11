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

	<?php if ( have_comments() ) : ?>
		<h3 class="cm-comments-title">
			<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
			<span>Diskusi &amp; Tanggapan (<?php echo get_comments_number(); ?>)</span>
		</h3>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 46,
			) );
			?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="comment-navigation" role="navigation" style="display:flex;justify-content:space-between;margin-bottom:24px;">
				<div class="nav-previous"><?php previous_comments_link( '&larr; Komentar Lama' ); ?></div>
				<div class="nav-next"><?php next_comments_link( 'Komentar Baru &rarr;' ); ?></div>
			</nav>
		<?php endif; ?>

	<?php elseif ( comments_open() ) : ?>
		<div style="text-align:center;padding:32px 20px;background:#f8fafc;border:1.5px dashed #cbd5e1;border-radius:16px;margin-bottom:32px;">
			<svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="1.8" style="margin:0 auto 12px auto;display:block;"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
			<h4 style="font-family:'Lexend',sans-serif;font-size:16px;font-weight:700;color:#0f172a;margin:0 0 6px 0;">Belum Ada Komentar</h4>
			<p style="font-size:13.5px;color:#64748b;margin:0;max-width:480px;margin-left:auto;margin-right:auto;">
				Jadilah yang pertama memberikan tanggapan, ulasan praktis, atau pertanyaan seputar artikel dan formulasi sabun ini!
			</p>
		</div>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments" style="color:#64748b;font-size:14px;text-align:center;padding:16px;background:#f1f5f9;border-radius:8px;">
			Kolom komentar pada artikel ini telah ditutup.
		</p>
	<?php endif; ?>

	<?php
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$aria_req  = ( $req ? " aria-required='true'" : '' );

	$fields = array(
		'author' => '<div class="comment-form-author">' .
			'<label for="author">' . esc_html__( 'Nama Lengkap', 'cleaniquemart' ) . ( $req ? ' <span class="required" style="color:#ef4444;">*</span>' : '' ) . '</label>' .
			'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="Tuliskan nama Anda" size="30"' . $aria_req . ' />' .
			'</div>',
		'email' => '<div class="comment-form-email">' .
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
			'<textarea id="comment" name="comment" cols="45" rows="5" placeholder="Tuliskan ulasan atau pertanyaan Anda secara jelas..." aria-required="true"></textarea>' .
			'</div>',
		'fields'               => $fields,
	) );
	?>

</div>
