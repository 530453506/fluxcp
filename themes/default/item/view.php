<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>物品资料</h2>
<?php if ($item): ?>
<?php $icon = $this->iconImage($item->item_id); ?>
<h3>
	<?php if ($icon): ?><img src="<?php echo $icon ?>" /><?php endif ?>
	#<?php echo htmlspecialchars($item->item_id) ?>: <?php echo htmlspecialchars($item->name) ?>
</h3>
<table class="vertical-table">
	<tr>
		<th>道具 ID</th>
		<td><?php echo htmlspecialchars($item->item_id) ?></td>
		<?php if ($image=$this->itemImage($item->item_id)): ?>
		<td rowspan="<?php echo ($server->isRenewal)?9:8 ?>" style="width: 150px; text-align: center; vertical-alignment: middle">
			<img src="<?php echo $image ?>" />
		</td>
		<?php endif ?>
		<th>是否售卖</th>
		<td>
			<?php if ($item->cost): ?>
				<span class="for-sale yes">
					是
				</span>
			<?php else: ?>
				<span class="for-sale no">
					否
				</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>英文名</th>
		<td><?php echo htmlspecialchars($item->identifier) ?></td>
		<th>点券价格</th>
		<td>
			<?php if ($item->cost): ?>
				<?php echo number_format((int)$item->cost) ?>
			<?php else: ?>
				<span class="not-applicable">不售卖</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>中文名</th>
		<td><?php echo htmlspecialchars($item->name) ?></td>
		<th>类别</th>
		<td><?php echo $this->itemTypeText($item->type, $item->view) ?></td>
	</tr>
	<tr>
		<th>NPC售价</th>
		<td><?php echo number_format((int)$item->price_buy) ?></td>
		<th>重量</th>
		<td><?php echo round($item->weight, 1) ?></td>
	</tr>
	<tr>
		<th>NPC回收价</th>
		<td>
			<?php if (is_null($item->price_sell) && $item->price_buy): ?>
				<?php echo number_format(floor($item->price_buy / 2)) ?>
			<?php else: ?>
				<?php echo number_format((int)$item->price_sell) ?>
			<?php endif ?>
		</td>
		<th>装备等级</th>
		<td><?php echo number_format((int)$item->weapon_level) ?></td>
	</tr>
	<tr>
		<th>攻击距离</th>
		<td><?php echo number_format((int)$item->range) ?></td>
		<th>防御力</th>
		<td><?php echo number_format((int)$item->defence) ?></td>
	</tr>
	<tr>
		<th>洞数</th>
		<td><?php echo number_format((int)$item->slots) ?></td>
		<th>是否可以精炼</th>
		<td>
			<?php if ($item->refineable): ?>
				是
			<?php else: ?>
				否
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>攻击力</th>
		<td><?php echo number_format((int)$item->attack) ?></td>
		<th>最低等级限制</th>
		<td><?php echo number_format((int)$item->equip_level_min) ?></td>
	</tr>
	<?php if($server->isRenewal): ?>
	<tr>
		<th>魔法攻击力</th>
		<td><?php echo number_format((int)$item->matk) ?></td>
		<th>最高等级限制</th>
		<td>
			<?php if ($item->equip_level_max == 0): ?>
				<span class="not-applicable">无</span>
			<?php else: ?>
				<?php echo number_format((int)$item->equip_level_max) ?>
			<?php endif ?>
		</td>
	</tr>
	<?php endif ?>
	<tr>
		<th>装备位置</th>
		<td colspan="<?php echo $image ? 4 : 3 ?>">
			<?php if ($locs=$this->equipLocations($item->equip_locations)): ?>
				<?php echo htmlspecialchars(implode(' + ', $locs)) ?>
			<?php else: ?>
				<span class="not-applicable">无</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>进阶限制</th>
		<td colspan="<?php echo $image ? 4 : 3 ?>">
			<?php if ($upper=$this->equipUpper($item->equip_upper)): ?>
				<?php echo htmlspecialchars(implode(' / ', $upper)) ?>
			<?php else: ?>
				<span class="not-applicable">无</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>职业限制</th>
		<td colspan="<?php echo $image ? 4 : 3 ?>">
			<?php if ($jobs=$this->equippableJobs($item->equip_jobs)): ?>
				<?php echo htmlspecialchars(implode(' / ', $jobs)) ?>
			<?php else: ?>
				<span class="not-applicable">无</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>性别限制</th>
		<td colspan="<?php echo $image ? 4 : 3 ?>">
			<?php if ($item->equip_genders === '0'): ?>
				女性
			<?php elseif ($item->equip_genders === '1'): ?>
				男性
			<?php elseif ($item->equip_genders === '2'): ?>
				无限制
			<?php else: ?>
				<span class="not-applicable">未知</span>
			<?php endif ?>
		</td>
	</tr>
	<?php if (($isCustom && $auth->allowedToSeeItemDb2Scripts) || (!$isCustom && $auth->allowedToSeeItemDbScripts)): ?>
	<tr>
		<th>作用脚本</th>
		<td colspan="<?php echo $image ? 4 : 3 ?>">
			<?php if ($script=$this->displayScript($item->script)): ?>
				<?php echo $script ?>
			<?php else: ?>
				<span class="not-applicable">无</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>装备时触发脚本</th>
		<td colspan="<?php echo $image ? 4 : 3 ?>">
			<?php if ($script=$this->displayScript($item->equip_script)): ?>
				<?php echo $script ?>
			<?php else: ?>
				<span class="not-applicable">无</span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>卸载时触发脚本</th>
		<td colspan="<?php echo $image ? 4 : 3 ?>">
			<?php if ($script=$this->displayScript($item->unequip_script)): ?>
				<?php echo $script ?>
			<?php else: ?>
				<span class="not-applicable">无</span>
			<?php endif ?>
		</td>
	</tr>
	<?php endif ?>
    <?php if(Flux::config('ShowItemDesc')):?>
	<tr>
		<th>物品描述</th>
		<td colspan="<?php echo $image ? 4 : 3 ?>">
			<?php if($item->itemdesc): ?>
                <?php echo $item->itemdesc ?>
            <?php else: ?>
                <span class="not-applicable">未知</span>
			<?php endif ?>
		</td>
	</tr>
    <?php endif ?>
    
</table>
<?php if ($itemDrops): ?>
<h3><?php echo htmlspecialchars($item->name) ?>  由以下魔物掉落</h3>
<table class="vertical-table">
	<tr>
		<th>魔物ID</th>
		<th>魔物名称</th>
		<th>掉落概率</th>
		<th>魔物等级</th>
		<th>魔物种族</th>
		<th>魔物属性</th>
	</tr>
	<?php foreach ($itemDrops as $itemDrop): ?>
	<tr class="item-drop-<?php echo $itemDrop['type'] ?>">
		<td align="right">
			<?php if ($auth->actionAllowed('monster', 'view')): ?>
				<?php echo $this->linkToMonster($itemDrop['monster_id'], $itemDrop['monster_id']) ?>
			<?php else: ?>
				<?php echo $itemDrop['monster_id'] ?>
			<?php endif ?>
		</td>
		<td>
			<?php if ($itemDrop['type'] == 'mvp'): ?>
				<span class="mvp">MVP!</span>
			<?php endif ?>
			<?php echo htmlspecialchars($itemDrop['monster_name']) ?>
		</td>
		<td><strong><?php echo $itemDrop['drop_chance'] ?>%</strong></td>
		<td><?php echo number_format($itemDrop['monster_level']) ?></td>
		<td><?php echo Flux::monsterRaceName($itemDrop['monster_race']) ?></td>
		<td>
			Level <?php echo floor($itemDrop['monster_ele_lv']) ?>
			<em><?php echo Flux::elementName($itemDrop['monster_element']) ?></em>
		</td>
	</tr>
	<?php endforeach ?>
</table>
<?php endif ?>

<?php else: ?>
<p>No such item was found. <a href="javascript:history.go(-1)">Go back</a>.</p>
<?php endif ?>
