<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Viewing Monster</h2>
<?php if ($monster): ?>
<h3>
	#<?php echo $monster->monster_id ?>: <?php echo htmlspecialchars($monster->iro_name) ?>
	<?php if ($monster->mvp_exp): ?>
		<span class="mvp">(MVP)</span>
	<?php endif ?>
</h3>
<table class="vertical-table">
	<tr>
		<th>魔物 ID</th>
		<td><?php echo $monster->monster_id ?></td>
		<?php if ($image=$this->monsterImage($monster->monster_id)): ?>
		<td rowspan="12" style="width:150px; text-align: center; vertical-alignment: middle">
			<img src="<?php echo $image ?>" />
		</td>
		<?php endif ?>
		<th>大写名</th>
		<td><?php echo htmlspecialchars($monster->sprite) ?></td>
	</tr>
	<tr>
		<th>中文名</th>
		<td><?php echo htmlspecialchars($monster->kro_name) ?></td>
		<th>魔物类型</th>
		<td>
			<?php if (preg_match('/mob_db2$/', $monster->origin_table)): ?>
				特色
			<?php else: ?>
				官方
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th>英文名</th>
		<td><?php echo htmlspecialchars($monster->iro_name) ?></td>
		<th>HP</th>
		<td><?php echo number_format($monster->hp) ?></td>
	</tr>
	<tr>
		<th>体型</th>
		<td>
			<?php if ($size=Flux::monsterSizeName($monster->size)): ?>
				<?php echo htmlspecialchars($size) ?>
			<?php else: ?>
				<span class="not-applicable">Unknown</span>
			<?php endif ?>
		</td>
		<th>SP</th>
		<td><?php echo number_format($monster->sp) ?></td>
	</tr>
	<tr>
		<th>种族</th>
		<td>
			<?php if ($race=Flux::monsterRaceName($monster->race)): ?>
				<?php echo htmlspecialchars($race) ?>
			<?php else: ?>
				<span class="not-applicable">Unknown</span>
			<?php endif ?>	
		</td>
		<th>等级</th>
		<td><?php echo number_format($monster->level) ?></td>
	</tr>
	<tr>
		<th>属性</th>
		<td><?php echo Flux::elementName($monster->element_type) ?> (Lv <?php echo floor($monster->element_level) ?>)</td>
		<th>移动速度</th>
		<td><?php echo number_format($monster->speed) ?></td>
	</tr>
	<tr>
		<th>基本经验值</th>
		<td><?php echo number_format($monster->base_exp) ?></td>
		<th>攻击力</th>
		<td><?php echo number_format($monster->attack1) ?>~<?php echo number_format($monster->attack2) ?></td>
	</tr>
	<tr>
		<th>Job 经验值</th>
		<td><?php echo number_format($monster->job_exp) ?></td>
		<th>防御力</th>
		<td><?php echo number_format($monster->defense) ?></td>
	</tr>
	<tr>
		<th>MVP 经验值</th>
		<td><?php echo number_format($monster->mvp_exp) ?></td>
		<th>魔法防御</th>
		<td><?php echo number_format($monster->magic_defense) ?></td>
	</tr>
	<tr>
		<th>攻击延迟</th>
		<td><?php echo number_format($monster->attack_delay) ?> ms</td>
		<th>攻击距离</th>
		<td><?php echo number_format($monster->range1) ?></td>
	</tr>
	<tr>
		<th>攻击后移动延迟</th>
		<td><?php echo number_format($monster->attack_motion) ?> ms</td>
		<th>魔法范围</th>
		<td><?php echo number_format($monster->range2) ?></td>
	</tr>
	<tr>
		<th>移动后延迟</th>
		<td><?php echo number_format($monster->defense_motion) ?> ms</td>
		<th>视线范围</th>
		<td><?php echo number_format($monster->range3) ?></td>
	</tr>
	<tr>
		<th>特性说明</th>
		<td colspan="<?php echo $image ? 4 : 3 ?>">
			<ul class="monster-mode">
			<?php foreach ($this->monsterMode($monster->mode) as $mode): ?>
				<li><?php echo htmlspecialchars($mode) ?></li>
			<?php endforeach ?>
			</ul>
		</td>
	</tr>
	<tr>
		<th>魔物属性</th>
		<td colspan="<?php echo $image ? 4 : 3 ?>">
			<table class="character-stats">
				<tr>
					<td><span class="stat-name">STR</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->strength) ?></span></td>
					<td><span class="stat-name">AGI</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->agility) ?></span></td>
					<td><span class="stat-name">VIT</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->vitality) ?></span></td>
				</tr>
				<tr>
					<td><span class="stat-name">INT</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->intelligence) ?></span></td>
					<td><span class="stat-name">DEX</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->dexterity) ?></span></td>
					<td><span class="stat-name">LUK</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->luck) ?></span></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<h3><?php echo htmlspecialchars($monster->iro_name) ?> 掉落物品</h3>
<?php if ($itemDrops): ?>
<table class="vertical-table">
	<tr>
		<th>物品 ID</th>
		<th colspan="2">物品名称</th>
		<th>掉落几率</th>
	</tr>
	<?php $mvpDrops = 0; ?>
	<?php foreach ($itemDrops as $itemDrop): ?>
	<tr class="item-drop-<?php echo $itemDrop['type'] ?>"
		title="<strong><?php echo htmlspecialchars($itemDrop['name']) ?></strong> (<?php echo (float)$itemDrop['chance'] ?>%)">
		<td align="right">
			<?php if ($auth->actionAllowed('item', 'view')): ?>
				<?php echo $this->linkToItem($itemDrop['id'], $itemDrop['id']) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($itemDrop['id']) ?>
			<?php endif ?>
		</td>
		<?php if ($image=$this->iconImage($itemDrop['id'])): ?>
			<td><img src="<?php echo $image ?>" /></td>
			<td>
				<?php if ($itemDrop['type'] == 'mvp'): ?>
				<?php ++$mvpDrops; ?>
					<span class="mvp">MVP!</span>
				<?php endif ?>
				<?php echo htmlspecialchars($itemDrop['name']) ?>
			</td>
		<?php else: ?>
			<td colspan="2">
				<?php if ($itemDrop['type'] == 'mvp'): ?>
				<?php ++$mvpDrops; ?>
					<span class="mvp">MVP!</span>
				<?php endif ?>
				<?php echo htmlspecialchars($itemDrop['name']) ?>
			</td>
		<?php endif ?>
		<td><?php echo (float)$itemDrop['chance'] ?>%</td>
	</tr>
	<?php endforeach ?>
	<?php if ($mvpDrops > 1): ?>
	<tr>
		<td colspan="4" align="center">
			<p><em>Note: Only <strong>one</strong> MVP drop will be rewarded.</em></p>
		</td>
	</tr>
	<?php endif ?>
</table>
<?php else: ?>
<p><?php echo htmlspecialchars($monster->iro_name) ?> 没有掉落物品</p>
<?php endif ?>

<h3><?php echo htmlspecialchars($monster->iro_name) ?> 魔物技能</h3>
<?php if ($mobSkills): ?>
<table class="vertical-table">
	<tr>
		<th>技能名称</th>
		<th>技能等级</th>
<!--		<th>State</th>-->
<!--		<th>Rate</th>-->
<!--		<th>Cast Time</th>-->
<!--		<th>Delay</th>-->
<!--		<th>Cancelable</th>-->
<!--		<th>Target</th>-->
<!--		<th>Condition</th>-->
<!--		<th>Value</th>-->
	</tr>
	<?php foreach ($mobSkills as $skill): ?>
	<tr>
		<td><?php echo htmlspecialchars($skill->INFO) ?></td>
		<td><?php echo htmlspecialchars($skill->SKILL_LV) ?></td>
<!--		<td>--><?php //echo htmlspecialchars(ucfirst($skill->STATE)) ?><!--</td>-->
<!--		<td>--><?php //echo $skill->RATE/100 ?><!--%</td>-->
<!--		<td>--><?php //echo $skill->CASTTIME/1000 ?><!--s</td>-->
<!--		<td>--><?php //echo $skill->DELAY/1000 ?><!--s</td>-->
<!--		<td>--><?php //echo htmlspecialchars(ucfirst($skill->CANCELABLE)) ?><!--</td>-->
<!--		<td>--><?php //echo htmlspecialchars(ucfirst($skill->TARGET)) ?><!--</td>-->
<!--		<td><em>--><?php //echo htmlspecialchars($skill->CONDITION) ?><!--</em></td>-->
<!--		<td>-->
<!--			--><?php //if (!is_null($skill->CONDITION_VALUE) && trim($skill->CONDITION_VALUE) !== ''): ?>
<!--				--><?php //echo htmlspecialchars($skill->CONDITION_VALUE) ?>
<!--			--><?php //else: ?>
<!--				<span class="not-applicable">None</span>-->
<!--			--><?php //endif ?>
<!--		</td>-->
	</tr>
	<?php endforeach ?>
</table>
<?php else: ?>
<p>No skills found for <?php echo htmlspecialchars($monster->iro_name) ?>.</p>
<?php endif ?>

<?php else: ?>
<p>No such monster was found. <a href="javascript:history.go(-1)">Go back</a>.</p>
<?php endif ?>
