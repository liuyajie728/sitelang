<ol class=breadcrumb>
  <li><a href="<?php echo base_url(); ?>">首页</a></li>
  <li><a href="<?php echo base_url('activity'); ?>">活动</a></li>
  <li class=active>详情</li>
</ol>
<div id=content>
	<h2>“<?php echo $activity[0]['name']; ?>”营销活动业绩</h2>
	<div id=chart>
		<script>
		$(function(){
		    $('#chart').highcharts({
		            chart: {
		                type: 'column'
		            },
		            title: {
		                text: '个人推广业绩'
		            },
					subtitle: {
					    text: '总访问量<?php echo $activity_sum; ?>人次'
					},
		            xAxis: {
		                type: 'category',
		                labels: {
		                    rotation: -45,
		                    align: 'right',
		                    style: {
		                        fontSize: '13px',
		                        fontFamily: 'Verdana, sans-serif'
		                    }
		                }
		            },
		            yAxis: {
		                min: 0,
		                title: {
		                    text: '推广量(人次)'
		                }
		            },
		            legend: {
		                enabled: false
		            },
		            tooltip: {
		                pointFormat: '<?php echo (isset($period))?$period.'期间':'至今共'; ?><span>{point.y}人次</span>',
		            },
		            series: [{
		                name: '推广量',
		                data: [
<?php
	foreach ($spreader_performance as $spreader_item):
	echo "['".$spreader_item['spreader_lastname'].$spreader_item['spreader_firstname']."',".$spreader_item['spreader_sum'].'],';
	endforeach;
?>
		                ],
		                dataLabels: {
		                    enabled: true,
		                    rotation: -90,
		                    color: '#ffffff',
		                    align: 'right',
		                    x: 4,
		                    y: 10,
		                    style: {
		                        fontSize: '12px',
		                        fontFamily: 'Arial, sans-serif',
		                        textShadow: '0 0 3px black'
		                    }
		                }
		            }]
			});
		});
		</script>
	</div>
	<table id=table class="table table-condensed table-hover table-responsive table-striped sortable">
		<thead>
			<tr><th>推广人身份</th><th>推广人</th><th>素材</th><th>广告位</th><th>访问来源</th><th>访客<br></th><th>访客IP</th><th>访客设备</th><th>到访时间</th></tr>
		</thead>
		<tbody>
		<?php foreach ($referrals as $referral_item): ?>
			<tr>
				<td><?php echo ($referral_item['spreader_type'] == 1)?'员工':'非员工'; ?></td>
				<td><?php echo ($referral_item['spreader_id'] == NULL)?'无':'ID '.$referral_item['spreader_id'].'<br><a href='.base_url('stuff/'.$referral_item['spreader_id']).' target=_blank>'.$referral_item['spreader_lastname'].$referral_item['spreader_firstname'].'</a>'; ?></td>
				<td><?php echo ($referral_item['ad_id'] == NULL)?'无':'ID <a href="'.base_url('ad/'.$referral_item['ad_id']).'" target=_blank>'.$referral_item['ad_id'].'</a></td>'; ?>
				<td><?php echo ($referral_item['poster_id'] == NULL)?'无':'ID <a href="'.base_url('poster/'.$referral_item['poster_id']).'" target=_blank>'.$referral_item['poster_id'].'</a></td>'; ?>
				<td><?php echo ($referral_item['user_referer'] == NULL)?'直接访问':$referral_item['user_referer']; ?></td>
				<td><?php echo ($referral_item['user_id'] == NULL)?'未登录':'ID '.$referral_item['user_id'].'<br><a href='.base_url('user/'.$referral_item['user_id']).' target=_blank>'.$referral_item['user_lastname'].$referral_item['user_firstname'].'</a>'; ?></td>
			    <td><?php echo $referral_item['user_ip']; ?></td>
				<td><?php echo $referral_item['user_agent']; ?></td>
				<td><?php echo $referral_item['time_visit']; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>