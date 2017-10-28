<?php $cache_info = $this->get_cache_info(); ?>
<div class="wrap gravatar-cache">
    <div id="icon-options-general" class="icon32"><br></div>
    <h2>头像缓存设置</h2>
    <form method="post" class="gravatar-cache-form">
        <table class="form-table">
            <tr valign="top">
                <th scope="row"><?php _e( '打开缓存' );?></th>
                <td>
                    <label>
                        <input type="checkbox" name="nf_c_a_options[active]" value="1" <?php checked( $options[0]['active'], 1 ); ?> />
                       <?php _e( '开启 / 关闭' ); ?>
                    </label>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><?php _e( '缓存时间' );?></th>
                <td>
                    <label> <?php _e( '天' ); ?>: <input type="text" name="nf_c_a_options[ttl_day]" value="<?php echo $options[0]['ttl_day']; ?>" size="2"/></label>
                    <label> <?php _e( '时' ); ?>: <input type="text" name="nf_c_a_options[ttl_hour]" value="<?php echo $options[0]['ttl_hour']; ?>" size="2"/></label>
                    <label> <?php _e( '分' ); ?>: <input type="text" name="nf_c_a_options[ttl_min]" value="<?php echo $options[0]['ttl_min']; ?>" size="2"/></label>
                </td>
            </tr>
        </table>
        <p class="submit">
            <button type="submit" name="nf_c_a_submit" id="submit" class="button button-primary" ><?php _e('Save Changes'); ?></button>
            <button class="button" name="nf_clear_cache" <?php echo $cache_info['amount'] == 0 ? 'disabled="disabled"': ''; ?>><?php _e('清除缓存'); ?>
                <span class="cache count-<?php echo $cache_info['amount']; ?> ">
                    <span class="clear-count"><?php echo '('.$cache_info['amount'] .' files / '.$cache_info['used_space'].')' ?></span>
                </span>
            </button>
        </p>
    </form>
</div>