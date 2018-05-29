<table>
	<!-- Resultado da pesquisa com o limit e a página definida -->
	<?php foreach ($lista as $paginacao):?>
		<tr>
			<td>
				<?php echo $paginacao['id']; ?> -
			</td>
			<td>
				<?php echo $paginacao['texto']; ?>
			</td>
		</tr>
	<?php endforeach ?>
	
</table>
<hr>
<?php for ($q=1; $q <= $paginas ; $q++): ?>
	<a href="<?php echo BASE_URL; ?>paginacao?p=<?php echo $q; ?>"><?php echo $q; ?></a>
<?php endfor ?>