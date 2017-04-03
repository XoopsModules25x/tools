CREATE TABLE tools_blocks (
  bid           MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  mid           SMALLINT(5) UNSIGNED  NOT NULL DEFAULT '0',
  options       VARCHAR(255)          NOT NULL DEFAULT '',
  name          VARCHAR(150)          NOT NULL DEFAULT '',
  title         VARCHAR(255)          NOT NULL DEFAULT '',
  desciption    VARCHAR(255)          NOT NULL DEFAULT '',
  dirname       VARCHAR(50)           NOT NULL DEFAULT '',
  func_file     VARCHAR(50)           NOT NULL DEFAULT '',
  show_func     VARCHAR(50)           NOT NULL DEFAULT '',
  edit_func     VARCHAR(50)           NOT NULL DEFAULT '',
  template      VARCHAR(50)           NOT NULL DEFAULT '',
  tpl_content   TEXT,
  bcachetime    INT(10) UNSIGNED      NOT NULL DEFAULT '0',
  bcachemodel   TINYINT(1) UNSIGNED   NOT NULL DEFAULT '0',
  last_modified INT(10) UNSIGNED      NOT NULL DEFAULT '0',
  PRIMARY KEY (bid)
)
  ENGINE = MyISAM;
